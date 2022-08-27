<?php

namespace App\Http\Controllers\Admin\Announcement;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('admin.announcement.consultation');
    }
}
