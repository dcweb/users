<?php



Route::group(['middleware' => ['web']], function () {

	Route::group( array("prefix" => "admin"), function() {

    	Route::group(['middleware' => 'auth:dcms'], function() {

    		//USERS
    		Route::group(array("before"=>"admin.dcms"), function() {
    			Route::resource('webusers','UserController');
    			Route::any('webusers/api/table', array('as'=>'admin/webusers/api/table', 'uses' => 'UserController@getDatatable'));
    		});
    });
  });
});



 ?>
