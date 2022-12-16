<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->password = Hash::make($request->password);
                $newUser->name = $request->name;
                $newUser->save();
                return redirect()->route('login')->with('message', 'Create account seccess!');
            } else {
                return redirect()->route('login')->with('message', 'Account exits!');
            }
        }
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password],)) {
            if (Auth::user()->type == 'admin') {
                $videos = Video::all();
                return redirect()->route('home');
            } else {
        
                $videos = video::all();
                $result['home'] = DB::table('videos')->get()->toArray();
        
                return redirect()->route('index'); 
            }
        } else {
            return redirect()->route('login');
        }
    }


    public function show()
    {
        return view('register');
    }
    
}
