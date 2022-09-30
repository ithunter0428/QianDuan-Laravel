<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function use()
    {
        return view('depositUse_L');
    }

    public function req()
    {
        return view('depositReq_L');
    }
}
