<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('userId','=',Auth::user()->userId)->findOrFail($id);
        return view('user.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        'userName' => 'required',
        'address' => 'required',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'facebook' => 'nullable',
        'twitter' => 'nullable',
        'path' => 'nullable',
        'instagram' => 'nullable',
        'password' => 'required|min:6|confirmed',
    ]);
        $user = User::findOrFail($id);
        $image = Input::file('picture');
        if ($image !== null) {
        $filename = time().'.'.$request->picture->getClientOriginalExtension();
        $request->picture->move(public_path('images/user'), $filename); 
        $user->picture = $filename;
        }
        
        $user->userName = $request->userName;
        $user->address = $request->address;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->path = $request->path;
        $user->instagram = $request->instagram;
        $user->password = $request->password;

        $user->save();
        return redirect()->route('user.show', [$id]);
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
}
