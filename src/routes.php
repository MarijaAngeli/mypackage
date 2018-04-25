<?php
/**
 * Created by PhpStorm.
 * User: MarijaAngeli
 * Date: 4/25/18
 * Time: 10:11 AM
 */

Route::get('nova/test', function (){
    return 'Test';
});

Route::get('nova/hello', function (){
    return \Nova::hello();
});

Route::get('nova/cont', 'Maria\Nova\Http\NovaController@index');

Route::get('nova/config', function (){
   return config('nova.hello') .
            config('nova.world');
});

Route::get('nova/model', function (){
    dd(\Maria\Nova\Models\Nova::get());
});

