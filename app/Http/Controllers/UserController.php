<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\role_user;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $user = User::paginate(4);
        return view('admin.user.index',compact('user'));
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
        $this->validate($request, [
            'userId' => 'required|max:255|unique:users',
            'userName' => 'required|max:255',
            'address' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
    ]);

        $user = new User;
        $user->userId = Input::get('userId');
        $user->userName = Input::get('userName');
        $user->address = Input::get('address');
        $user->email = Input::get('email');
        $user->password = Input::get('password');

        $user->save();

        $role = new role_user;
        $role->role_id = '2';
        $role->user_userId = Input::get('userId');

        $role->save();

        return redirect('admin/userlist');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = role_user::all()->first();
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact(['role'],['user']));
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
        'userId' => 'required|max:255',
        'userName' => 'required|max:255',
        'address' => 'required',
        'email' => 'required|email|max:255',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password' => 'required|min:6|confirmed',
    ]);
        $user = User::findOrFail($id);
        $image = Input::file('picture');
        if ($image !== null) {
        $filename = time().'.'.$request->picture->getClientOriginalExtension();
        $request->picture->move(public_path('images/user'), $filename); 
        $user->picture = $filename;
        }
        
        $user->userId = Input::get('userId');
        $user->userName = Input::get('userName');
        $user->address = Input::get('address');
        $user->email = Input::get('email');
        $user->password = Input::get('password');

        $user->save();

        $role = role_user::where('user_userId',$id)->first();
        $role->role_id = Input::get('role_id');
        $role->user_userId = Input::get('userId');

        $role->save();
        return redirect('/admin/userlist');
        // $roleid = role_user::find($id);
        // $role = $user->role()->updateExistingPivot($roleid, ['role_id' => Input::get('role_id')]);

        // $role->save();

        
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
        $user = User::where('userId','LIKE',"%{$keyword}%")->orWhere('userName','LIKE',"%{$keyword}%")->paginate(4);
        return view('admin.user.index',compact('user'));
    }
}
