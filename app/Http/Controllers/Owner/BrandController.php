<?php

namespace App\Http\Controllers\Owner;

use App\Brand;
use App\User;
use App\Company;
use App\Branch;

Use File;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class BrandController extends Controller
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

        $brand = Brand::whereHas('branch', function($query) use($keyword) {
        $query->where('branchName', 'LIKE', "%{$keyword}%")->where('branchEnteredById','=',Auth::user()->userId);
        })->orWhere('brandName','LIKE',"%{$keyword}%")->where('brandEnteredById','=',Auth::user()->userId)->paginate(6);

        return view('owner.brand.index',compact('brand'));
    }
    public function index()
    {
        $brand = Brand::where('brandEnteredById','=',Auth::user()->userId)->paginate(6);
        return view('owner.brand.index',compact('brand'));
    }
    public function __construct()
    {
        $this->middleware('auth')->except('show');
        $this->middleware('owner')->except('show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $branch = Branch::all();
        $company = Company::all();
        return view('owner.brand.create',compact(['users'],['company'],['branch']));
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
        'brandName' => 'required',
        'brandWebsite' => 'nullable',
        'brandPicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brandPointRules' => 'nullable',
        'companyIdFK' => 'required',
        'brandEnteredById' => 'required',
        'branchIdFK' => 'required',
    ]);
        $brand = new Brand;
        $image = Input::file('brandPicture');
        if ($image !== null) {
        $filename = time().'.'.$request->brandPicture->getClientOriginalExtension();
        $request->brandPicture->move(public_path('images/brand'), $filename); 
        $brand->brandPicture = $filename;
        }
        $brand->brandName = $request->brandName;
        $brand->brandWebsite = $request->brandWebsite;
        $brand->brandPointRules = $request->brandPointRules;
        $brand->companyIdFK = $request->companyIdFK;
        $brand->brandEnteredById = $request->brandEnteredById;
        $brand->branchIdFK = $request->branchIdFK;

        
        $brand->save();
        return redirect('owner/brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('owner.brand.detail',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        $users = User::all();
        $company = Company::all();
        $branch = Branch::all();
        return view('owner.brand.edit',compact(['brand'],['users'],['company'],['branch']));
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
        'brandName' => 'required',
        'brandWebsite' => 'nullable',
        'brandPicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brandPicture2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brandPicture3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brandPicture4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brandPicture5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brandPointRules' => 'nullable',
        'companyIdFK' => 'required',
        'brandEnteredById' => 'required',
        'branchIdFK' => 'required',
    ]);
        $brand = Brand::findOrFail($id);
        $files =[];
        if ($request->file('brandPicture')) $files[] = $request->file('brandPicture');
        if ($request->file('brandPicture2')) $files[] = $request->file('brandPicture2');
        if ($request->file('brandPicture3')) $files[] = $request->file('brandPicture3');
        if ($request->file('brandPicture4')) $files[] = $request->file('brandPicture4');
        if ($request->file('brandPicture5')) $files[] = $request->file('brandPicture5');

        foreach ($files as $file)
        {
            if(!empty($file)){
                

                if(Input::file('brandPicture')){
                    $filename=time().'.'.$request->brandPicture->getClientOriginalName();
                $file->move(
                    base_path().'/public/images/brand', $filename
                );
                    $brand->brandPicture = $filename;
                }
                elseif(Input::file('brandPicture2')){
                    $filename2 =time().'.'.$request->brandPicture2->getClientOriginalName();
                $file->move(
                    base_path().'/public/images/brand', $filename2
                );
                    $brand->brandPicture2 = $filename2;
                }
                elseif($request->file('brandPicture3')){
                    $filename3 =time().'.'.$request->brandPicture3->getClientOriginalName();
                $file->move(
                    base_path().'/public/images/brand', $filename3
                );
                    $brand->brandPicture3 = $filename3;
                }
                elseif($request->file('brandPicture4')){
                    $filename4 =time().'.'.$request->brandPicture4->getClientOriginalName();
                $file->move(
                    base_path().'/public/images/brand', $filename4
                );
                    $brand->brandPicture4 = $filename4;
                }
                elseif($request->file('brandPicture5')){
                    $filename5 =time().'.'.$request->brandPicture5->getClientOriginalName();
                $file->move(
                    base_path().'/public/images/brand', $filename5
                );
                    $brand->brandPicture5 = $filename5;
                }
            }

        }
        
        $brand->brandName = $request->brandName;
        $brand->brandWebsite = $request->brandWebsite;
        
        $brand->brandPointRules = $request->brandPointRules;
        $brand->companyIdFK = $request->companyIdFK;
        $brand->brandEnteredById = $request->brandEnteredById;
        $brand->branchIdFK = $request->branchIdFK;

        $brand->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $delete = Brand::findOrFail($id);
        $delete->delete();
        return redirect('owner/brand');
    }
}
