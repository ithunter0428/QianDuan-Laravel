<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class BankAccController extends Controller
{
    public function index()
    {
        return view('admin.environment.bank_acc');
    }
}
