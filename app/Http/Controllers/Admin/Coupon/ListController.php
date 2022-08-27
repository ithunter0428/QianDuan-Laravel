<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class ListController extends Controller
{
    public function index()
    {
        return view('admin.coupon.list');
    }
}
