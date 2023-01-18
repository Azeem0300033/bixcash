<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Input;
use App\Models\Coupon;
use App\Models\Currency;
use Illuminate\Support\Facades\Hash;
use App\Models\Generalsetting;
use App\Models\Notification;
use App\Models\Bus;
use App\Models\Bus_Checkout;
use App\Models\Seat_Checkout;
use App\Models\Order;
use App\Models\OrderTrack;
use App\Models\PaymentGateway;
use App\Models\Pickup;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\User;
use App\Models\UserNotification;
use App\Models\VendorOrder;
use Auth;
use DB;
use Session;
use Validator;


class ApiController extends Controller
{
    
    
     public function profile($id)
    {
        $user = User::where('id',$id)->first();  
        return $user; 
    }

    public function profileupdate(Request $request ,$id)
    {
        
        
        $data = User::where('id',$id)->first(); 
        
        $data->name  = $request->name;
        $data->email  = $request->email;
        $data->address  = $request->address;
        $data->password  = Hash::make($request->password);
        
            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/users/',$name);
                if($data->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/users/'.$data->photo)) {
                        unlink(public_path().'/assets/images/users/'.$data->photo);
                    }
                }            
            $input['photo'] = $name;
            } 
        $data->save;
        $msg = 'Successfully updated your profile';
        return response()->json($msg); 
    }
    
    public function login(Request $request)
    {
       //--- Validation Section
        $rules = [
                  'email'   => 'required|email',
                  'password' => 'required'
                ];

        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('status' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

      // Attempt to log the user in
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        
          if(Auth::guard('web')->user()->email_verified == 'No')
          {
            return response()->json(array('status' => ['Your Email is not Verified!' ]));   
          }
          else
          {
        
        $users = Auth::user();
        
          // Login as User
          return response()->json(array('status' => 200,'UserData' => [ $users],'User_id' => [ $users->id]));  
      
          }
          }

      // if unsuccessful, then redirect back to the login with the form data
          return response()->json(array('status' => [ 0 => 'Credentials Doesn\'t Match !' ]));    
    }
    
    public function register(Request $request)
        {



        //--- Validation Section

        $rules = [
		        'email'   => 'required|email|unique:users',
		        'password' => 'required|confirmed'
                ];
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('msg' => [$validator->getMessageBag()->toArray()]));
        }
        //--- Validation Section Ends

	        $user = new User;
	        $input = $request->all();  
	        
	      
	       
           
	        
	        $input['password'] = bcrypt($request['password']);
	        $token = md5(time().$request->name.$request->email);
	        $input['verification_link'] = $token;
	        $input['affilate_code'] = md5($request->name.$request->email);

	           $gs = Generalsetting::findOrFail(1);
			  
			$user->fill($input)->save();
	        if($gs->is_verification_email == 1)
	        {
	        $to = $request->email;
	        $subject = 'Verify your email address.';
	        $msg = "Dear Customer,<br> We noticed that you need to verify your email address. <a href=".url('user/register/verify/'.$token).">Simply click here to verify. </a>";
	        //Sending Email To Customer
	        if($gs->is_smtp == 1)
	        {
	        $data = [
	            'to' => $to,
	            'subject' => $subject,
	            'body' => $msg,
	        ];

	        $mailer = new GeniusMailer();
	        $mailer->sendCustomMail($data);
	        }
	        else
	        {
	        $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
	        mail($to,$subject,$msg,$headers);
	        }
          	return response()->json(array('msg' => ['We need to verify your email address. We have sent an email to '.$to.' to verify your email address. Please click link in that email to continue.']));
	        }
	        else {

            $user->email_verified = 'Yes';
            $user->update();
	        $notification = new Notification;
	        $notification->user_id = $user->id;
	        $notification->save();
	        
	       
	        
            // Auth::guard('web')->login($user); 
          	return response()->json(array('status' => 200 , 'msg' => ['SucessFully Register'] , 'UserData' => [ $user]));  
	        }
    }
    

        public function MessageCreatePost(Request $request)
        {
                $message = new Conversation();
                $message->subject = $request->subject;
                $message->sent_user= $request->user_id;
                $message->recieved_user = $request->id;
                $message->message = $request->message;
                $message->save();
                return $message;
        }
        
        
         public function ProductCart(Request $request)
        {
                $productcart = new ProductCart();
                $productcart->product_id = $request->product_id;
                $productcart->user_id= $request->user_id;
                 $productcart->qty= $request->qty;
                $productcart->save();
                return $productcart;
        }
        
        
        public function MessageCreate($id)
        {
                $message = Conversation::where('sent_user',$id)->get();
                return $message;
        }
        
        
        public function OrderData(Request $request)
        {
        
        $curr = Currency::where('is_default','=',1)->first();
        $settings = Generalsetting::findOrFail(1);
        $gs = Generalsetting::findOrFail(1);
        $order = new Order;
        $item_name = $settings->title." Order";
        $item_number = str_random(4).time();
        $order['user_id'] = $request->user_id;
        $cart = Product::
        join('product_carts','product_carts.product_id','=','products.id')
        ->where('product_carts.user_id',$request->user_id)
        ->get();
        $item_qty = $request->item_qty;
        $totalPrice = $request->totalPrice;
        $order['cart'] = utf8_encode(bzcompress(serialize($cart), 9));
        $order['totalQty'] = $request->totalQty;
        $order['pay_amount'] = round($request->total / $curr->value, 2);
        $order['method'] = $request->method;
        $order['shipping'] = $request->shipping;
        $order['pickup_location'] = $request->pickup_location;
        $order['customer_email'] = $request->customer_email;
        $order['customer_name'] = $request->customer_name;
        $order['shipping_cost'] = $request->shipping_cost;
        $order['packing_cost'] = $request->packing_cost;
        $order['tax'] = $request->tax;
        $order['customer_phone'] = $request->customer_phone;
        $order['order_number'] = str_random(4).time();
        $order['customer_address'] = $request->customer_address;
        $order['customer_country'] = $request->customer_country;
        $order['customer_city'] = $request->customer_city;
        $order['customer_zip'] = $request->customer_zip;
        $order['shipping_email'] = $request->shipping_email;
        $order['shipping_name'] = $request->shipping_name;
        $order['shipping_phone'] = $request->shipping_phone;
        $order['shipping_address'] = $request->shipping_address;
        $order['shipping_country'] = $request->shipping_country;
        $order['shipping_city'] = $request->shipping_city;
        $order['shipping_zip'] = $request->shipping_zip;
        $order['order_note'] = $request->order_notes;
        $order['txnid'] = $request->txn_id4;
        $order['coupon_code'] = $request->coupon_code;
        $order['coupon_discount'] = $request->coupon_discount;
        $order['dp'] = $request->dp;
        $order['payment_status'] = "Pending";
        $order['currency_sign'] = $curr->sign;
        $order['currency_value'] = $curr->value;
        $order['vendor_shipping_id'] = $request->vendor_shipping_id;
        $order['vendor_packing_id'] = $request->vendor_packing_id;        
            if (Session::has('affilate')) 
            {
                $val = $request->total / 100;
                $sub = $val * $gs->affilate_charge;
                $user = User::findOrFail(Session::get('affilate'));
                $user->affilate_income += $sub;
                $user->update();
                $order['affilate_user'] = $user->name;
                $order['affilate_charge'] = $sub;
            }
        $order->save();

        $track = new OrderTrack;
        $track->title = 'Pending';
        $track->text = 'You have successfully placed your order.';
        $track->order_id = $order->id;
        $track->save();
        
        $notification = new Notification;
        $notification->order_id = $order->id;
        $notification->save();
                    if($request->coupon_id != "")
                    {
                       $coupon = Coupon::findOrFail($request->coupon_id);
                       $coupon->used++;
                       if($coupon->times != null)
                       {
                            $i = (int)$coupon->times;
                            $i--;
                            $coupon->times = (string)$i;
                       }
                        $coupon->update();

                    }

        foreach($cart as $prod)
        {
            $x = $prod->size_qty;
            if(!empty($x))
            {
                $product = Product::findOrFail($prod->product_id);
                $x = (int)$x;
                $x = $x - $prod['qty'];
                $temp = $product->size_qty;
                $temp[$prod['size_key']] = $x;
                $temp1 = implode(',', $temp);
                $product->size_qty =  $temp1;
                $product->update();               
            }
        }


        foreach($cart as $prod)
        {
            $x = (string)$prod['stock'];
            if($x != null)
            {

                $product = Product::findOrFail($prod->product_id);
                $product->stock =  $prod['stock'];
                $product->update();  
                if($product->stock <= 5)
                {
                    $notification = new Notification;
                    $notification->product_id = $product->id;
                    $notification->save();                    
                }              
            }
        }

        $notf = null;

        foreach($cart as $prod)
        {
            if($prod['item']['user_id'] != 0)
            {
                $vorder =  new VendorOrder;
                $vorder->order_id = $order->id;
                $vorder->user_id = $prod->user_id;
                $notf[] = $prod->user_id;
                $vorder->qty = $prod->qty;
                $vorder->price = $prod->price;
                $vorder->order_number = $order->order_number;             
                $vorder->save();
            }

        }

        if(!empty($notf))
        {
            $users = array_unique($notf);
            foreach ($users as $user) {
                $notification = new UserNotification;
                $notification->user_id = $user;
                $notification->order_number = $order->order_number;
                $notification->save();    
            }
        }

        



        

        
           $to = $request->email;
           $subject = "Your Order Placed!!";
           $msg = "Hello ".$request->name."!\nYou have placed a new order.\nYour order number is ".$order->order_number.".Please wait for your delivery. \nThank you.";
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
           mail($to,$subject,$msg,$headers);            
      
        //Sending Email To Admin
        
           $to = $gs->email;
           $subject = "New Order Recieved!!";
           $msg = "Hello Admin!\nYour store has recieved a new order.\nOrder Number is ".$order->order_number.".Please login to your panel to check. \nThank you.";
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
           mail($to,$subject,$msg,$headers);
        
        // return $order;
       
         return response()->json(array('status' => 200 , 'data' => $order));  
        }

        public function OrderDataGet($id)
        {
             $order = Order::where('id',$id)->get();
             return $order;
        }
        
        
        
         public function Bussstore(Request $request)
    {
        $bus_checkout = new Bus_Checkout();
        $bus_checkout->user_id = request('user_id');
        $bus_checkout->bus_id = request('bus_id');
        $bus_checkout->name = request('name');
        $bus_checkout->birth = request('birth');
        $bus_checkout->gender = request('gender');
        $bus_checkout->cnic = request('cnic');
        $bus_checkout->phone = request('phone');
        $bus_checkout->email = request('email');
        $bus_checkout->seats_no = request('seats_no');
        $bus_checkout->total = request('total');
        $bus_checkout->save();
        
        foreach ($request->seats_num as $name) 
        {
            $seat_checkout = new Seat_Checkout();
            $seat_checkout->seats = $name;
            $seat_checkout->checkout_id = $bus_checkout->id;
            $seat_checkout->save();    
        }
        
       
        return response()->json(array('status' => 200 , 'data' => $bus_checkout));  
    }
    
    public function allbuss()
    
    {
        $bus_checkout = Bus::all();
        return $bus_checkout;
    } 
    
    
     public function some_method(Request $request)
    {
        
        $where = $request->where;
        $to = $request->to;
        $date = $request->date;
        $time = $request->time;
        
        
        $s_where =  Bus::query();
        
        
         if(!empty($where))
        {
          $s_where = $s_where->where('b_station',$where);
        }
        
        if(!empty($to))
        {
          $s_where = $s_where->where('b_drop',$to);
        }
        
        if(!empty($date))
        {
          $s_where = $s_where->where('b_date',$date);
        }
        
        
        if(!empty($time))
        {
          $s_where = $s_where->where('b_time',$time);
        }
        
         $s_where =$s_where->get();
        
      
    
    	return response()->json(array('status' => 200 , 'data' => $s_where));  
        
    }
    
    
     public function forgot(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $input =  $request->all();
      if (User::where('email', '=', $request->email)->count() > 0) {
      // user found
      $admin = User::where('email', '=', $request->email)->firstOrFail();
      $autopass = str_random(8);
      $input['password'] = bcrypt($autopass);
      $admin->update($input);
      $subject = "Reset Password Request";
      $msg = "Your New Password is : ".$autopass;
      if($gs->is_smtp == 1)
      {
          $data = [
                  'to' => $request->email,
                  'subject' => $subject,
                  'body' => $msg,
          ];

          $mailer = new GeniusMailer();
          $mailer->sendCustomMail($data);                
      }
      else
      {
          $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
          mail($request->email,$subject,$msg,$headers);            
      }
      return response()->json(array('status' => 200 , 'msg' => "Your Password Reseted Successfully. Please Check your email for new Password."));
      }
      else{
      // user not found
      return response()->json(array('errors' => [ 0 => 'No Account Found With This Email.' ]));    
      }  
    }


        
        
}
