<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;


class BandungController extends Controller
{
    public function index()
    {
    	$brand = Brand::all();
        return view('index.bandung.index',compact('brand'));
    }
    public function index2()
    {
        return view('index.jakarta.index',compact('brand'));
    }
    public function index3()
    {
        return view('index.surabaya.index',compact('brand'));
    }
}
