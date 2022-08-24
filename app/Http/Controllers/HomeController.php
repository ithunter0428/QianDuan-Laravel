<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\User;
use Session;
use Hash;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user && $user->is_admin) {
            return redirect('/admin');
        }

        return view('index');
    }

    public function signin()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->is_admin)
                return redirect('/admin');
            return view('index');
        }

        return view('signin');
    }

    public function signup()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->is_admin)
                return redirect('/admin');
            return view('index');
        }

        return view('signup');
    }

    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->first_name = $request->get('sFirstName');
            $user->last_name = $request->get('sLastName');
            $user->email = $request->get('sMemEmail');
            $user->password = Hash::make($request->get('sMemPw'));
            $user->save();

            return response()->json([
                'RST_NO' => "0",
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'RST_NO' => "1",
                'RST_MSG' => $th->getMessage(),
            ]);
        }
        return response()->json([
            'RST_NO' => "1",
            'RST_MSG' => 'fail',
        ]);
    }

    public function login(Request $request)
    {
        try {
            $credentials = [
                'email' => $request->get('sMemEmail'),
                'password' => $request->get('sMemPw'),
            ];

            Auth::attempt($credentials);
        } catch (\Throwable $th) {
        }
        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
