<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\mainController;





// Route::get('/post/{id?}/comment/{commentid?}', function ($id = null, $comment = null) {

//     if ($id) {
//         return "<h1>The value of id  is:" . $id . " & the comment value is " . $comment . "</h1>";
//     } else {
//         return "<h1>no id</h1>";
//     }
// })->whereNumber('id')->whereAlpha('commentid');


// Route::get('/post/client', function () {
//     return view('sub');
// })->name('about');


// Route::any('/test',function(){
//    echo "hi i am post method";
// });

// Route::get('/getdata',function(){
//     return "Hello";
// });


// Route::redirect('/main', '/');

// Route::get('/with/{name?}',function($name = null){

//     $data = compact('name');

//     return view('with') -> with($data);
// });


// Route::get('/with/{abc}',function($abc){
// $name = "ashu";
// $city = "";
// return view('with',['naam' => $name,'place' => $city,'alpha' => $abc]);
//  });


// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/special', function () {
//     return view('special');
// });

// Route::get('/testimonials', function () {
//     return view('testimonial');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/test',function(){
//     return view('java');
// });

// Route::get('/fruit',function(){
//     return view('check');
// });

// function gets(){
//    return [
//         1 =>['name' => 'ashu','age' => '56' , 'phone' => '6955446'],
//         2 =>['name' => 'ashukshdjh','age' => '5687', 'phone' => '6955455446'],
//         3 =>['name' => 'ashu','age' => '567' , 'phone' => '695556754446'],
//     ];
// }

// Route::get('/with',function(){
//    $arrays = gets();
//    return view('with',['arr' => $arrays]);
// });

// Route::get('/showing/{id}',function($id){
// $user = gets();
// $use = $user[$id];
// return view('use',['ar' => $use,'id' => $id]);
// }) -> name('sh');

// Route::get('/user',[PageController::class,'showUser']);
Route::get('/home{id}',[PageController::class,'temp']) -> name('home');
Route::get('/hu',[PageController::class,'op']);
Route::resource('/photos',mainController::class);
