<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login','ApiController@login');
Route::post('/register','ApiController@register');


Route::get('/profile/{id}', 'ApiController@profile');
Route::post('/profileUpdate/{id}', 'ApiController@profileupdate');


Route::get('/messagedata/{id}','ApiController@MessageCreate');
Route::post('/messagedataPost','ApiController@MessageCreatePost');

Route::get('/OrderData/{id}','ApiController@OrderDataGet');
Route::post('/OrderDataPost','ApiController@OrderData');


Route::post('/ProductCart','ApiController@ProductCart');

Route::post('/forgetpassword','ApiController@forgot');


Route::post('/search-bus', 'ApiController@some_method');
Route::post('/search-bus_Checkout', 'ApiController@Bussstore');
Route::get('/allbuss', 'ApiController@allbuss');

Route::get('/comment/{id}',function ($id) {
$comment = App\Models\Comment::where('product_id',$id)->join('users','users.id','comments.user_id')->get();
return $comment;
});




Route::get('/vendors',function () {
$vendors = App\Models\User::where('is_vendor','=',2)->orWhere('is_vendor','=',1)->orderBy('id','desc')->get();
return $vendors;
});

Route::get('/customers',function () {
$customers = App\Models\User::where('is_vendor','=',0)->orderBy('id','desc')->get();
return $customers;
});


Route::get('/categories/{id}',function ($id) {
$categories = App\Models\Category::where('id',$id)->first();
return $categories;
});

Route::get('/categories',function () {
$categories = App\Models\Category::all();
return $categories;
});


Route::get('/products',function () {
$products = App\Models\Product::all();
return $products;
});


// Route::get('/products',function () {
// $products = App\Models\Product::all();
// return $products;
// });


Route::get('/products/{id}',function ($id) {
$products = App\Models\Product::where('id',$id)->first();
return $products;
});


Route::get('/productsCategoryWise/{id}',function ($id) {
$products = App\Models\Product::where('category_id',$id)->get();
return $products;
});



Route::get('/wallet/{id}',function ($id) {
$data = App\Models\UserPaymentMaster::where('user_id','=',$id)->orderBy('id','desc')->get();
return $data;
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
