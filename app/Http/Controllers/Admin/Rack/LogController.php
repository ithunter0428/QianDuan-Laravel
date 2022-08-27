<?php

namespace App\Http\Controllers\Admin\Rack;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class LogController extends Controller
{
    public function index()
    {
        return view('admin.rack.log');
    }
}
