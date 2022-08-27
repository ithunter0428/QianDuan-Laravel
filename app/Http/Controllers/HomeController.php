<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;
use Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user && $user->is_admin) {
            return Redirect::route('admin.main.home');
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

            if (Auth::attempt($credentials))
                Session::forget('signin_errors');
            else
                Session::put('signin_errors', 'Wrong email and password');

        } catch (\Throwable $th) {
        }
        return Redirect::route('view_signin');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
