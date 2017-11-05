<?php

namespace App\Http\Controllers;
use App\Branch;
use App\Brand;
use App\Category;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        // $branch = Branch::where('branchName','LIKE',"%{$keyword}%")->paginate(30);

        $branch = Branch::whereHas('category', function($query) use($keyword) {
        $query->where('categoryType', 'LIKE', "%{$keyword}%");
        })->where('branchVenue','Bandung')->orWhere('branchAddress','LIKE',"%{$keyword}%")->where('branchVenue','Bandung')->orWhere('branchName','LIKE',"%{$keyword}%")->where('branchVenue','Bandung')->orWhere('branchPointRules','LIKE',"%{$keyword}%")->where('branchVenue','Bandung')->paginate(6);

        // $branch = Branch::where('branchVenue','LIKE',"%{$keyword}%")
        // ->orWhere('branchAddress','LIKE',"%{$keyword}%")
        // ->paginate(100);

        return view('search',compact(['brand'],['branch']));
    }

    public function search2(Request $request)
    {
        $keyword = $request['keyword'];
        // $branch = Branch::where('branchName','LIKE',"%{$keyword}%")->paginate(30);

        $branch = Branch::whereHas('category', function($query) use($keyword) {
        $query->where('categoryType', 'LIKE', "%{$keyword}%");
        })->where('branchVenue','Jakarta')->orWhere('branchAddress','LIKE',"%{$keyword}%")->where('branchVenue','Jakarta')->orWhere('branchName','LIKE',"%{$keyword}%")->where('branchVenue','Jakarta')->orWhere('branchPointRules','LIKE',"%{$keyword}%")->where('branchVenue','Jakarta')->paginate(6);

        // $branch = Branch::where('branchVenue','LIKE',"%{$keyword}%")
        // ->orWhere('branchAddress','LIKE',"%{$keyword}%")
        // ->paginate(100);

        return view('search',compact(['brand'],['branch']));
    }
    public function search3(Request $request)
    {
        $keyword = $request['keyword'];
        // $branch = Branch::where('branchName','LIKE',"%{$keyword}%")->paginate(30);

        $branch = Branch::whereHas('category', function($query) use($keyword) {
        $query->where('categoryType', 'LIKE', "%{$keyword}%");
        })->where('branchVenue','Surabaya')->orWhere('branchAddress','LIKE',"%{$keyword}%")->where('branchVenue','Surabaya')->orWhere('branchName','LIKE',"%{$keyword}%")->where('branchVenue','Surabaya')->orWhere('branchPointRules','LIKE',"%{$keyword}%")->where('branchVenue','Surabaya')->paginate(6);

        // $branch = Branch::where('branchVenue','LIKE',"%{$keyword}%")
        // ->orWhere('branchAddress','LIKE',"%{$keyword}%")
        // ->paginate(100);

        return view('search',compact(['brand'],['branch']));
    }

}
