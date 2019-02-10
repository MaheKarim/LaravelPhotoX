<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;
use App\LogoChange;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logochanges = LogoChange::all();
        return view('admin.dashboard.home',compact('logochanges'));
    }

    public function changepassword()
    {
        $logochanges = LogoChange::all();
        return view('admin.password.change',compact('logochanges'));
    }

    public function changepasswordupdate(Request $request)
    {
        // echo $request->old_password;
        // echo $request->new_password;
        // echo $request->confirm_password;

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|same:confirm_password|min:4',
            'confirm_password' => 'required',
        ]);
        // echo Auth::user()->id;

        //echo bcrypt($request->old_password);
        if (Hash::check($request->old_password, Auth::user()->password)) {
            // echo 'Milse Hoga';
            User::find(Auth::user()->id)->update([
                'password' => bcrypt($request->new_password),
            ]);

            return back()->withpasswordupdate('Password update done!');
        } else {
            return back()->withErrors('Password does not match!');
        }
    }

    public function homepagesec()
    {
        return view('admin.homepage.view');
    }
}
