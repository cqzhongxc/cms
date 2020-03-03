<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::name('admin.')->group(function (){
        Auth::routes();
    });
});

Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
    // 角色管理
    Route::resource('role', "RoleController");

    Route::get("/role/permission/{role}", "RoleController@permission");
    Route::post("/role/permission/{role}", "RoleController@permissionStore");
});
