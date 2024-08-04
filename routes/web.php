<?php


Route::get('/', 'authController@index');

Route::get('/sign-up', 'authController@signup');
Route::post('/save-sign-up', 'authController@savesignup');

Route::get('/login', 'authController@login')->name('login');
Route::post('/postlogin', 'authController@postlogin');
Route::get('/logout', 'authController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'userdata']], function () {
    Route::get('/dashboard', 'dashboardController@dashboard')->name('dashboard');
    Route::get('/pemograman-web-1', 'dashboardController@web1');
    Route::get('/quiz-web-1', 'QuizController@showQuiz');
    Route::post('/quiz-web-1-submit', 'QuizController@submitQuiz');
});

Route::group(['middleware' => ['auth', 'userdata','checklevel:Admin']], function () {
    Route::get('/listUser', 'dashboardController@listUser')->name('listUser');
    Route::get('/edituser/{id}/edit', 'userEditController@edit')->name('usersEdit');
    Route::put('/edituser/{id}', 'userEditController@update')->name('usersUpdate');

});