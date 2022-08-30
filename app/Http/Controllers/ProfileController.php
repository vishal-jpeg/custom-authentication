<?php

namespace App\Http\Controllers;
use auth;
use DB;
use Illuminate\Http\Request;
use App\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Middleware\RedirectIfAuthenticated;

use Redirect,Response;

class ProfileController extends Controller
{
    public function construct(){ 
        $this->middleware('auth');
    }

    public function index(){
        return view('Profile');
    }

    public function store(Request $request){
        $profile_email = $request->input('profile_email');
        $user = auth::user()->email;
        if($user==$profile_email){
        $data = request()->validate([
            'profile_email'=>'required|email|string',
            //'profile_name'=>'required|min:3|max:15',
            'phone_number'=>'required|numeric|min:10',
            'address'=>'required||regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'state'=>'required|min:5|max:10',
            'pincode'=>'required|digits:6|integer'
        ]);

        Profile::create($data);
         return Redirect::to('home');
        //  ->withsuccess('Greate| Profile details are updated successfullly ');
        }
        else{
            return redirect()->back()->with('message', 'Oops, your email deos not match the  registered email id');
        }
    }
}
