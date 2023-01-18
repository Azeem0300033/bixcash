<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use App\Classes\GeniusMailer;
use App\Models\Notification;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;

class RegisterController extends Controller
{

    public function register(Request $request)
    {

    	$gs = Generalsetting::findOrFail(1);

    	if($gs->is_capcha == 1)
    	{
	        $value = session('captcha_string');
	        if ($request->codes != $value){
	            return response()->json(array('errors' => [ 0 => 'Please enter Correct Capcha Code.' ]));    
	        }    		
    	}


        //--- Validation Section

        $rules = [
		        'email'   => 'required|email|unique:users',
		        'password' => 'required|confirmed'
                ];
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

	        $user = new User;
	        $input = $request->all();  
	        
	        $count = User::where('is_vendor', '=', '0')->get();
	       
            if(count($count) <= 50)
            {
             $input['level'] = 1;   
             $input['join_level'] = 1;
            }else if(count($count) > 50 && count($count) <= 150)
            {
              User::where('level', 1)->update(['level' => 2]);    
              $input['level'] = 2;  
              $input['join_level'] = 2;
            }else if(count($count) > 150 && count($count) <= 1000)
            {
              $input['level'] = 3;
              $input['join_level'] = 3;
            }else if(count($count) > 1000 && count($count) <= 10000)
            {
              $input['level'] = 4;  
              $input['join_level'] = 4;
            }else if(count($count) > 10000 && count($count) <= 100000)
            {
              $input['level'] = 5; 
              $input['join_level'] = 5;
            }else if(count($count) > 100000 && count($count) <= 1000000)
            {
              $input['level'] = 6;  
              $input['join_level'] = 6;
            }else if(count($count) > 1000000 && count($count) <= 10000000)
            {
              $input['level'] = 7;  
              $input['join_level'] = 7;
            }else
            {
              $input['level'] = 8;   
            }
             
	        
	        $input['password'] = bcrypt($request['password']);
	        $token = md5(time().$request->name.$request->email);
	        $input['verification_link'] = $token;
	        $input['affilate_code'] = md5($request->name.$request->email);

	          if(!empty($request->vendor))
	          {
					//--- Validation Section
					$rules = [
						'shop_name' => 'unique:users',
						'shop_number'  => 'max:10'
							];
					$customs = [
						'shop_name.unique' => 'This Shop Name has already been taken.',
						'shop_number.max'  => 'Shop Number Must Be Less Then 10 Digit.'
					];

					$validator = Validator::make(Input::all(), $rules, $customs);
					if ($validator->fails()) {
					return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
					}
					$input['is_vendor'] = 1;

			  }
			  
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
          	return response()->json('We need to verify your email address. We have sent an email to '.$to.' to verify your email address. Please click link in that email to continue.');
	        }
	        else {

            $user->email_verified = 'Yes';
            $user->update();
	        $notification = new Notification;
	        $notification->user_id = $user->id;
	        $notification->save();
	        
	        if($input['level'] == 2)
	        {
	           User::where('join_level', 1)->update(['level' => 2]);
	           User::where('join_level', 2)->update(['level' => 1]);
	           
	        }
	        if($input['level'] == 3)
	        {
	           User::where('join_level', 1)->update(['level' => 3]);
	           User::where('join_level', 2)->update(['level' => 2]);
	           User::where('join_level', 3)->update(['level' => 1]);
	            
	        }if($input['level'] == 4)
	        {
	           User::where('join_level', 1)->update(['level' => 4]);
	           User::where('join_level', 2)->update(['level' => 3]);
	           User::where('join_level', 3)->update(['level' => 2]);
	           User::where('join_level', 4)->update(['level' => 1]);
	        }
	        if($input['level'] == 5)
	        {
	           User::where('join_level', 1)->update(['level' => 5]);
	           User::where('join_level', 2)->update(['level' => 4]);
	           User::where('join_level', 3)->update(['level' => 3]);
	           User::where('join_level', 4)->update(['level' => 2]); 
	           User::where('join_level', 5)->update(['level' => 1]);
	        } 
	        if($input['level'] == 6)
	        {
	           User::where('join_level', 1)->update(['level' => 6]);
	           User::where('join_level', 2)->update(['level' => 5]);
	           User::where('join_level', 3)->update(['level' => 4]);
	           User::where('join_level', 4)->update(['level' => 3]); 
	           User::where('join_level', 5)->update(['level' => 2]);
	           User::where('join_level', 6)->update(['level' => 1]);
	        } 
	        if($input['level'] == 7)
	        {
	           User::where('join_level', 1)->update(['level' => 7]);
	           User::where('join_level', 2)->update(['level' => 6]);
	           User::where('join_level', 3)->update(['level' => 5]);
	           User::where('join_level', 4)->update(['level' => 4]); 
	           User::where('join_level', 5)->update(['level' => 3]);
	           User::where('join_level', 6)->update(['level' => 2]);
	           User::where('join_level', 7)->update(['level' => 1]);
	        }
	        if($input['level'] == 8)
	        {
	           User::where('join_level', 1)->update(['join_level' => 0]);
	           User::where('join_level', 2)->update(['join_level' => 1]);
	           User::where('join_level', 3)->update(['join_level' => 2]);
	           User::where('join_level', 4)->update(['join_level' => 3]); 
	           User::where('join_level', 5)->update(['join_level' => 4]);
	           User::where('join_level', 6)->update(['join_level' => 5]);
	           User::where('join_level', 7)->update(['join_level' => 6]); 
	        }
	        
            Auth::guard('web')->login($user); 
          	return response()->json(1);
	        }

    }

    public function token($token)
    {
        $gs = Generalsetting::findOrFail(1);

        if($gs->is_verification_email == 1)
	        {    	
        $user = User::where('verification_link','=',$token)->first();
        if(isset($user))
        {
            $user->email_verified = 'Yes';
            $user->update();
	        $notification = new Notification;
	        $notification->user_id = $user->id;
	        $notification->save();
            Auth::guard('web')->login($user); 
            return redirect()->route('user-dashboard')->with('success','Email Verified Successfully');
        }
    		}
    		else {
    		return redirect()->back();	
    		}
    }
}