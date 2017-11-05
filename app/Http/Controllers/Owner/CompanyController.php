<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Company;
use App\User;
use Auth;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $company = Company::where('companyName','LIKE',"%{$keyword}%")->where('companyEnteredById','=',Auth::user()->userId)->paginate(6);
        return view('owner.company.index',compact('company'));
    }
    public function __construct()
    {
        $this->middleware('auth')->except('show');
        $this->middleware('owner')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::where('companyEnteredById','=',Auth::user()->userId)->paginate(6);
        return view('owner.company.index',compact('company'));
    }
    public function unowned()
    {
        $company = Company::where('companyEnteredById','=',null)->paginate(6);
        return view('owner.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.company.create');
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
        'companyEnteredById' => 'required',
    ]);
        $company = new Company;
        $filename = time().'.'.$request->companyLogoUrl->getClientOriginalExtension();
        $request->companyLogoUrl->move(public_path('images/companylogo'), $filename);
        $company->companyName = $request->companyName;
        $company->companyLogoUrl = $filename;
        $company->companyPhone = $request->companyPhone;
        $company->companyWebsite = $request->companyWebsite;
        $company->companyEmail = $request->companyEmail;
        $company->companyNotes = $request->companyNotes;
        $company->companyStatus = $request->companyStatus;
        $company->companyEnteredById = $request->companyEnteredById;

        $company->save();
        return redirect('owner/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       abort(404);
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

        return view('owner.company.edit',compact('company'));
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
        'companyStatus' => 'required',
        'companyEnteredById' => 'required',
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
        return redirect('owner/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Company::findOrFail($id);
        $delete->delete();
        return redirect('owner/company');
    }
}
