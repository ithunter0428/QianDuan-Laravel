<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.management.page');
    }
}
