<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/xin-chao/{ten}/{namsinh?}', function ($ten, $namsinh='2000') {
//     return 'xin chào ' . $ten . '<br>Nam sinh ' . $namsinh;
// })->where(['ten' => '[a-z]+','namsinh' => '[0-9]+']);

// Route::get('user/{id}', function ($id) {
//     echo "ID của User là: " . $id;}) ->name('user.detail');

// Route::get('XinChao/{Ten}/{NamSinh}','App\Http\Controllers\TestController@getXinChao');

// Route::get('Chao/{user}','App\Http\Controllers\TestController@getDemo');

// Route::get('Welcome/{name}/{age}','App\Http\Controllers\TestController@getWelcome');

// Route::get('login', 'App\Http\Controllers\LoginController@getLogin');
// Route::post('login', 'App\Http\Controllers\LoginController@postLogin');

// Route::get('call-view', function () {
//     return view('home');
// });
// Route::get('call-contact', function () {
//     return view('contact');
// });

// Route::get('index','App\Http\Controllers\TestController@getIndex');


// tạo bảng
// Route::get('create-persons','App\Http\Controllers\TestController@CreatePersons');

// Route::get('schema/create-table', function () {
//     Schema::create('users',function($table){
//         $table->increments('id');

//     });
// });

Route::get('schema/create-author',function(){
	Schema::create('authors',function($table)
	{
		$table->increments('id_author');
		$table->string('username','100');
		$table->string('password','100');
		$table->string('address','255');
		$table->string('name','255');
		$table->integer('phone');
		$table->timestamps();
	});
});


Route::get('schema/create-post', function(){
    Schema::create('posts',function($table){
        $table->increments('id_posts');
        $table->string('title',50);
        $table->longText('description');
        $table->integer('NumViews');
        $table->integer('NumLikes');
        $table->timestamps();
        $table->integer('id_author')->unsigned();
        $table->foreign('id_author')->references('id_author')
                                    ->on('authors')
                                    ->onDelete('cascade');
    });
});

