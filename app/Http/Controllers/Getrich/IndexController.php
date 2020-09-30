<?php

namespace App\Http\Controllers\Getrich;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    //

    public function index()
    {


    	

    	// 视图
    	return view('getrich.index.index',[

    	]);
    }
}
