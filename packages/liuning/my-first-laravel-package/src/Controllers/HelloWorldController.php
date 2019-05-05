<?php

//namespace App\Http\Controllers;
namespace LiuNing\FirstLaravelPackage\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello($name)
    {
        //echo 'HelloWorldController hello ' . $name;
	$package_name = config('liuning.package_name','null');
	return view('liuning::hello', compact('name','package_name'));
    }

    public function world($name)
    {
        //echo 'HelloWorldController world ' . $name;
	return view('liuning::hello', compact('name'));
    }
}
