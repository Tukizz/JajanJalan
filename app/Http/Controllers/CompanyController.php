<?php

namespace App\Http\Controllers;

use App\Company;
use App\Branch;
use App\Brand;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $company = Company::where('companyName','LIKE',"%{$keyword}%")->paginate(4);
        return view('admin.company.index',compact('company'));
    }
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $company = Company::paginate(4);
        return view('admin.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.company.create',compact('user'));
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
        'companyName' => 'required',
        'companyLogoUrl' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'companyPhone' => 'required',
        'companyWebsite' => 'required',
        'companyEmail' => 'required',
        'companyNotes' => 'nullable',
        'companyStatus' => 'required',
        'companyEnteredById' => 'nullable',
    ]);
        $company = new Company;
        $image = Input::file('companyLogoUrl');
        if ($image !== null) {
        $filename = time().'.'.$request->companyLogoUrl->getClientOriginalExtension();
        $request->companyLogoUrl->move(public_path('images/companylogo'), $filename); 
        $company->companyLogoUrl = $filename;
        }
        $company->companyName = $request->companyName;
        $company->companyPhone = $request->companyPhone;
        $company->companyWebsite = $request->companyWebsite;
        $company->companyEmail = $request->companyEmail;
        $company->companyNotes = $request->companyNotes;
        $company->companyStatus = $request->companyStatus;
        $company->companyEnteredById = $request->companyEnteredById;

        $company->save();
        return redirect('admin/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('admin.company.detail',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $company = Company::findOrFail($id);
         $user = User::all();

        return view('admin.company.edit',compact(['company'],['user']));
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
        'companyName' => 'required',
        'companyLogoUrl' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'companyPhone' => 'required',
        'companyWebsite' => 'required',
        'companyEmail' => 'required',
        'companyNotes' => 'required',
        'companyStatus' => 'required',
        'companyEnteredById' => 'nullable',
    ]);
        $company = Company::findOrFail($id);
        $image = Input::file('companyLogoUrl');
        if ($image !== null) {
        $filename = time().'.'.$request->companyLogoUrl->getClientOriginalExtension();
        $request->companyLogoUrl->move(public_path('images/companylogo'), $filename); 
        $company->companyLogoUrl = $filename;
        }
        
        $company->companyName = $request->companyName;
        $company->companyPhone = $request->companyPhone;
        $company->companyWebsite = $request->companyWebsite;
        $company->companyEmail = $request->companyEmail;
        $company->companyNotes = $request->companyNotes;
        $company->companyStatus = $request->companyStatus;
        $company->companyEnteredById = $request->companyEnteredById;

        $company->save();
        return redirect('admin/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $branch = Branch::where('companyIdFK',$id);
        $brand = Brand::where('companyIdFK',$id);

        $company->delete();
        $branch->delete();
        $brand->delete();
        return redirect('admin/company');
    }
}
