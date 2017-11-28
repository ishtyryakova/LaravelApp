<?php

namespace App\Http\Controllers;
use App\Maintext;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex(){
		$obj = Maintext::where('url','index')->first();
		dd($obj);
		return view('index');
	}
}
