<?php
    // Nimbomx\PackageTest\src\routes\web.php

    Route::group(['namespace' => 'Nimbomx\PackageTest\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('test', 'PackageTestController@index');
    });
    ?>