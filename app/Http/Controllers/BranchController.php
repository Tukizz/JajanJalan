<?php

namespace App\Http\Controllers;
use App\Branch;
use App\Brand;
use App\User;
use App\Company;
use App\Category;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Input;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        // $branch = Branch::where('branchName','LIKE',"%{$keyword}%")->paginate(30);

        $branch = Branch::whereHas('company', function($query) use($keyword) {
        $query->where('companyName', 'like', "%{$keyword}%");
        })->orWhere('branchName','LIKE',"%{$keyword}%")->orWhere('branchVenue','LIKE',"%{$keyword}%")->paginate(4);

        return view('admin.branch.index',compact('branch'));
    }
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $branch = Branch::paginate(6);
        return view('admin.branch.index',compact('branch'));
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

        return view('admin.branch.create',compact(['brand'],['company'],['users'],['category']));
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
        'branchPicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'branchTradingHours' => 'nullable',
        'branchNews' => 'nullable',
        'branchPointRules' => 'nullable',
        'companyIdFK' => 'nullable',
        'branchEnteredById' => 'nullable',
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
        $branch->branchTradingHours = $request->branchTradingHours;
        $branch->branchPointRules = $request->branchPointRules;
        $branch->branchNews = $request->branchNews;
        $branch->companyIdFK = $request->companyIdFK;
        $branch->branchEnteredById = $request->branchEnteredById;
        
        $branch->save();
        return redirect('admin/branch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::findOrFail($id);
        return view('admin.branch.detail',compact('branch'));
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
        return view('admin.branch.edit',compact(['branch'],['brand'],['company'],['users'],['category']));
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
        'branchTradingHours' => 'nullable',
        'branchNews' => 'nullable',
        'branchPointRules' => 'nullable',
        'companyIdFK' => 'nullable',
        'branchEnteredById' => 'nullable',
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
        $branch->branchTradingHours = $request->branchTradingHours;
        $branch->branchPointRules = $request->branchPointRules;
        $branch->branchNews = $request->branchNews;
        $branch->companyIdFK = $request->companyIdFK;
        $branch->branchEnteredById = $request->branchEnteredById;

        
        $branch->save();
        return redirect('admin/branch');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Branch::findOrFail($id);
        $brand = Brand::where('branchIdFK',$id);

        $brand->delete();
        $delete->delete();
        return redirect('admin/branch');
    }
}
