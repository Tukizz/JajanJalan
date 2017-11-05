<?php

namespace App\Http\Controllers\Owner;

use App\Branch;
use App\Brand;
use App\User;
use App\Company;
use App\Category;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Auth;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
        $this->middleware('owner')->except('show');
    }
    public function index()
    {
        $branch = Branch::where('branchEnteredById','=',Auth::user()->userId)->paginate(4);
        return view('owner.branch.index',compact('branch'));
    }
    public function unowned()
    {
        $branch = Branch::where('branchEnteredById','=',null)->paginate(4);
        return view('owner.branch.index',compact('branch'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $company = Company::all();
        $users = User::all();
        $category = Category::all();

        return view('owner.branch.create',compact(['brand'],['company'],['users'],['category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
        'branchName' => 'required',
        'branchAddress' => 'required',
        'branchContactName' => 'required',
        'branchContactNo' => 'required',
        'branchVenue' => 'required',
        'branchCategory' => 'nullable',
        'branchVoucher' => 'nullable',
        'branchPicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'branchTradingHours' => 'nullable',
        'branchNews' => 'nullable',
        'branchPointRules' => 'nullable',
        'companyIdFK' => 'required',
        'branchEnteredById' => 'required',
        'membershipValidFrom' => 'nullable',
        'membershipValidUntil' => 'nullable',
    ]);
        $branch = new Branch;
        $image = Input::file('branchPicture');
        if ($image !== null) {
        $filename = time().'.'.$request->branchPicture->getClientOriginalExtension();
        $request->branchPicture->move(public_path('images/branch'), $filename); 
        $branch->branchPicture = $filename;
        }
        $branch->branchName = $request->branchName;
        $branch->branchAddress = $request->branchAddress;
        $branch->branchContactName = $request->branchContactName;
        $branch->branchContactNo = $request->branchContactNo;
        $branch->branchVenue = $request->branchVenue;
        $branch->branchCategory = $request->branchCategory;
        $branch->branchVoucher = $request->branchVoucher;
        $branch->branchTradingHours = $request->branchTradingHours;
        $branch->branchNews = $request->branchNews;
        $branch->branchPointRules = $request->branchPointRules;
        $branch->companyIdFK = $request->companyIdFK;
        $branch->branchEnteredById = $request->branchEnteredById;
        $branch->membershipValidFrom = $request->membershipValidFrom;
        $branch->membershipValidUntil = $request->membershipValidUntil;

        
        $branch->save();
        return redirect('owner/branch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::all();
        $user = User::all();
        $branch = Branch::findOrFail($id);
       
        return view('owner.branch.detail',compact(['branch'],['brand'],['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::all();
        $company = Company::all();
        $users = User::all();
        $category = Category::all();
        $branch = Branch::findOrFail($id);
        return view('owner.branch.edit',compact(['branch'],['brand'],['company'],['users'],['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'branchName' => 'required',
        'branchAddress' => 'required',
        'branchContactName' => 'required',
        'branchContactNo' => 'required',
        'branchVenue' => 'required',
        'branchCategory' => 'nullable',
        'branchPicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'branchVoucher' => 'nullable',
        'branchTradingHours' => 'nullable',
        'branchNews' => 'nullable',
        'branchPointRules' => 'nullable',
        'companyIdFK' => 'nullable',
        'branchEnteredById' => 'required',
        'membershipValidFrom' => 'nullable',
        'membershipValidUntil' => 'nullable',
    ]);
        $branch = Branch::findOrFail($id);
        $image = Input::file('branchPicture');
        if ($image !== null) {
        $filename = time().'.'.$request->branchPicture->getClientOriginalExtension();
        $request->branchPicture->move(public_path('images/branch'), $filename); 
        $branch->branchPicture = $filename;
        }
        $branch->branchName = $request->branchName;
        $branch->branchAddress = $request->branchAddress;
        $branch->branchContactName = $request->branchContactName;
        $branch->branchContactNo = $request->branchContactNo;
        $branch->branchVenue = $request->branchVenue;
        $branch->branchCategory = $request->branchCategory;
        $branch->branchVoucher = $request->branchVoucher;
        $branch->branchTradingHours = $request->branchTradingHours;
        $branch->branchPointRules = $request->branchPointRules;
        $branch->branchNews = $request->branchNews;
        $branch->companyIdFK = $request->companyIdFK;
        $branch->branchEnteredById = $request->branchEnteredById;
        $branch->membershipValidFrom = $request->membershipValidFrom;
        $branch->membershipValidUntil = $request->membershipValidUntil;

        
        $branch->save();
        return redirect('owner/branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        public function search(Request $request)
    {
        $keyword = $request['keyword'];
        // $branch = Branch::where('branchName','LIKE',"%{$keyword}%")->paginate(30);

        $branch = Branch::whereHas('company', function($query) use($keyword) {
        $query->where('companyName', 'LIKE', "%{$keyword}%")->where('companyEnteredById','=',Auth::user()->userId);
        })->orWhere('branchName','LIKE',"%{$keyword}%")->where('branchEnteredById','=',Auth::user()->userId)->paginate(6);

        // $branch = Branch::where('branchVenue','LIKE',"%{$keyword}%")
        // ->orWhere('branchAddress','LIKE',"%{$keyword}%")
        // ->paginate(100);

        return view('owner.branch.index',compact('branch'));
    }
}
