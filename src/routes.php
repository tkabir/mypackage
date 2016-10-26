<?php

Route::group(['namespace' => 'Tkabir\Somepackage\Controllers', 'prefix'=>'packagedemo'], function() {
    // Your route goes here
    Route::get('foo', 'SomeController@foo');
});