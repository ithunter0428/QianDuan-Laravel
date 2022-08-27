<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class NoDataController extends Controller
{
    public function index()
    {
        return view('admin.main.no_data');
    }
}
