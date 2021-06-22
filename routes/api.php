<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//URL API needn't check permission
Route::post('/get_city', "ApiController@getCity");
Route::post('/get_district', "ApiController@getDistrict");
Route::post('/get_communes', "ApiController@getCommunes");
