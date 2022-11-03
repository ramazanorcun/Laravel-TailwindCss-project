<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('addUser',["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::find($id);
        return view("updateUser",["users" => $users]);
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

        $name = $request ->get('name');
        $email = $request ->get('email');
        $title = $request ->get('title');
        $role = $request ->get('role');

        $users =User::find($id);
        $users ->name =$name;
        $users ->email =$email;
        $users ->title =$title;
        $users ->role =$role;
        $res= $users->save();
        if ($res) {
            return back()->with('success',"Your Update has been completed");
        } else {
            return back()->with('fail',"Your Update has not been completed");

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users =User::find($id);
        $users->delete();
        if ($users) {
            return back()->with('success',"Your deleted has been completed");
        } else {
            return back()->with('fail',"Your registration has not been completed");

        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required | email',
            'password'=>'required | min:6',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request-> password, $user->password)){
                $request->session()->put('loginId',$user->id);
                if($user->role == 'admin')
                {
                    return redirect('admin');
                }elseif($user->role == 'user')
                {
                    return redirect('dashboard');
                }else{
                    return back()->with('fail','kullunacı role bulunamadı.');
                }

            }else{
                return back()->with('fail',' Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registired.');
        }

    }
}
