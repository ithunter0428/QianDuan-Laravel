<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin.main.payment');
    }
}
