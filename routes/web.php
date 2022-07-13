<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

Route::get('/', function () {
  return view('welcome');
});


Route::get('/about-me', function () {
  return view('about');
});
//Route::get('/contact', function () {
 // return view('contact');
//});
Route::get('/post/{id}',function ($id) { 
  return "hello".$id; 
});

Route::get('/post/gogo/lift',array('as'=>'admin.home' ,function () { 
$url= route('admin.home');
  return "hello".$url; 
}));
//
//@$arrayName = array('' => , );

Route::get('/post/{id}','App\Http\Controllers\PostsController@index');

//Route::get('/contact','App\Http\Controllers\PostsController@create');

Route::get('/contact','App\Http\Controllers\PostsController@contact');

//Route::get('/post/{id}' ,'App\Http\Controllers\PostsController@show_post');

//Route::resource('posts','App\Http\Controllers\PostsController');
*/
/* Route::get('/insert',function(){
DB::insert('insert into posts( title , body ) values(?,?)' ,['php with laravel ','laravel amazing']);




});*/

/*Route::get('/read' , function(){

  $results= DB::select('select* from posts where id= ?' ,[1]);
  
  foreach($results as $post){
  
      return $post-> title;
  }
  
   });*/

   /*Route::get('/update', function(){
    $updated=DB::update('update posts set title ="update title testing" where id=?' ,[1]);
    return $updated;
    
    
    
     });*/
     
     /*Route::get('/delete',function(){

     $deleted=DB::delete('delete from posts  where id=?',[1]);
     return $deleted; 
     });

     Route::get('/students', function (){

      return view('students');    
      
      
      
     });*/
     

 
     use App\Http\Controllers\PostController;
     
     Route::resource('posts', PostController::class);