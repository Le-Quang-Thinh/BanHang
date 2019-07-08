<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function getIndex(){
    	$slide  =slide::all();
	    return view('trangchu',compact('slide'));
    }
}
