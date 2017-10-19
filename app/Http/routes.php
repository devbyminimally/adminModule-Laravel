<?php


Route::get('/', function () { return view('auth.login'); });

Route::get('change/{locale}', function ($locale) {
	Session::set('locale', $locale); // กำหนดค่าตัวแปรแบบ locale session ให้มีค่าเท่ากับตัวแปรที่ส่งเข้ามา 
	return Redirect::back(); // สั่งให้โหลดหน้าเดิม
});

Route::post('/login', 'loginController@checkLoginAPI');

Route::group(['middleware' => 'checkLogin'], function (){
	
	Route::get('/home', function () { return view('layouts.home.status'); });

	Route::get('/status', function () { return view('layouts.home.status'); });

	Route::post('/control/scSlide/addImage' , 'hardwareControl\scSlideController@addImage');
	Route::post('/control/scSlide/addVideo' , 'hardwareControl\scSlideController@addVideo');
	Route::resource('/control/scSlide', 'hardwareControl\scSlideController');
	
	Route::resource('/control/scMessage', 'hardwareControl\scMessageController');
	
	Route::get('/control/scRecommended/searchBook/{txtSearchBook}', 'hardwareControl\scRecommendedController@searchBook');
	Route::get('/control/scRecommended/delete/{bookID}', 'hardwareControl\scRecommendedController@deleteBook');
	Route::resource('/control/scRecommended', 'hardwareControl\scRecommendedController');

	Route::resource('/control/scSchedule', 'hardwareControl\scScheduleController');

	Route::resource('/control/sgColor', 'hardwareControl\sgColorController');
	Route::resource('/control/sgSound', 'hardwareControl\sgSoundController');

	Route::resource('/home/manageUser', 'home\userController');
	Route::resource('/home/configHardware', 'home\configController');
	Route::resource('/home/configSc', 'home\configScController');

	Route::get('/report/sc/basic' , 'reportController@scBasic');
	Route::post('/report/sc/request' , 'reportController@scRequest');








	Route::get('/logout', function(){ Session::flush(); return Redirect::back(); });
});




