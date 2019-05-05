<?php

# packages/liuning/my-first-laravel-package/src/routes.php
Route::get('hello', function(){
	echo 'Hello from liuning the my-first-laravel-package package!';
});
# packages/liuning/my-first-laravel-package/src/routes.php

Route::get('hello-world/hello/{name}', 'LiuNing\FirstLaravelPackage\Controllers\HelloWorldController@hello');
Route::get('hello-world/world/{name}', 'LiuNing\FirstLaravelPackage\Controllers\HelloWorldController@world');

Route::middleware(['liuning.api'])->group(function ($router) {
    $router->get('liuning/api', function () {
        return 'api success';
    });
});


?>
