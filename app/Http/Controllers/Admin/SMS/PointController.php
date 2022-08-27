<?php

namespace App\Http\Controllers\Admin\SMS;

use App\Http\Controllers\Controller;
use App\Models\DepositReq;

use Illuminate\Http\Request;
use Redirect;

class PointController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.sms.point');
    }
}
