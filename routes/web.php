<?php

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
//resources

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'dashbord','middleware'=>'admin','as'=>'admin.','namespace'=>'\App\Http\Controllers\Admin'],function(){
    Route::get('/', 'AdminMainController@index')->name('content');
//users
    Route::resource('users','usercontroller');  
    Route::get('/users_show/{id}','usercontroller@show')->name('users.show'); 
    Route::get('/user_destroy/{id}','UserController@destroy')->name('users.destroy'); 
    Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
    Route::get('/users/update/{id}', 'UserController@update')->name('users.update');

//categories

    Route::resource('categories','CategoeyController') ;
    Route::get('/category_destroy/{id}','CategoeyController@destroy')->name('categories.destroy');
    Route::get('/categories/edit/{id}', 'CategoeyController@edit')->name('categories.edit');
    Route::get('/categories/update/{id}', 'CategoeyController@update')->name('categories.update');


//comments
    Route::resource('comments','commentcontroller');
    Route::get('/comment_destroy/{id}','commentcontroller@destroy')->name('comments.destroy');


    //messages
    Route::resource('messages','messagecontroller');
    Route::get('/messages_show/{id}','messagecontroller@show')->name('messages.show');
    Route::get('/message_destroy/{id}','messagecontroller@destroy')->name('messages.destroy');

    //courses
    Route::resource('courses','coursecontroller');  
    Route::get('/course/edit/{id}', 'coursecontroller@edit')->name('courses.edit');
    Route::get('/courses/update/{id}', 'coursecontroller@update')->name('courses.update');
    Route::get('/course_destroy/{id}','coursecontroller@destroy')->name('courses.destroy');

    //lessons
    Route::resource('lessons','lessoncontroller');  
    Route::get('/lesson/edit/{id}', 'lessoncontroller@edit')->name('lessons.edit');
    Route::get('/lessons/update/{id}', 'lessoncontroller@update')->name('lessons.update');
    Route::get('/lesson_destroy/{id}','lessoncontroller@destroy')->name('lessons.destroy');


    //reviews
    Route::resource('reviews','reviewcontroller');  
   Route::get('/review_destroy/{id}','reviewcontroller@destroy')->name('reviews.destroy');


//posts
    Route::resource('posts','postcontroller');  
    Route::get('/post/edit/{id}', 'postcontroller@edit')->name('posts.edit');
    Route::get('/post/update/{id}', 'postcontroller@update')->name('posts.update');
    Route::get('/post_destroy/{id}','lessoncontroller@destroy')->name('posts.destroy');


    //for update enrollments
    Route::resource('enrollments','enrollmentcontroller');
    Route::get('/enrollment/edit/{id}', 'enrollmentcontroller@edit')->name('enrollments.edit');
    Route::get('/enrollment/update/{id}', 'enrollmentcontroller@update')->name('enrollments.update');
});








//for site
Route::get('/login_user','SiteController@index')->name('login_user');
Route::group(['prefix'=>'site','middleware'=>'user','as'=>'user.','namespace'=>'\App\Http\Controllers\User'],function(){
    Route::get('/', 'UserMainController@index')->name('content');
    Route::get('/blog','blogcontroller@index')->name('blogs.index');
    Route::get('/blog/blog_post/{id}','blogcontroller@show')->name('blogs.show');
    Route::resource('users','RegisterationController');
    Route::get('/register','RegisterationController@index')->name('users.register');
    Route::resource('comments','commentcontroller');
    // Route::post('/addcomment','commentcontroller@store')->name('comments.store');

    Route::resource('courses','coursecontroller');
    Route::get('/course_detail/{id}','coursecontroller@show')->name('courses.show');

    //for create_enrollments
    Route::group(['middleware'=>'enrollment','as'=>'enrollment.'],function(){
    
        Route::resource('enrollments','enrollmentcontroller') ;
    
        Route::get('/requestenrollment/{user_id}/{course_id}','enrollmentcontroller@store')->name('requestenrollment');
      
    
    
       });


    
});




