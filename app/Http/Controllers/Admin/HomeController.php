<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Redirect;

class HomeController extends Controller
{
    public function index()
    {
        return Redirect::route('admin.main.home');
    }

    public function main()
    {
        return Redirect::route('admin.main.order.home');
    }

    public function member()
    {
        return Redirect::route('admin.member.list.home');
    }

    public function announcement()
    {
        return Redirect::route('admin.announcement.setting.home');
    }

    public function management()
    {
        return Redirect::route('admin.management.banner.home');
    }

    public function coupon()
    {
        return Redirect::route('admin.coupon.list.home');
    }

    public function sms()
    {
        return Redirect::route('admin.sms.send.home');
    }

    public function environment()
    {
        return Redirect::route('admin.environment.mem_grade.home');
    }

    public function rack()
    {
        return Redirect::route('admin.rack.management.home');
    }

    public function statistics()
    {
        return Redirect::route('admin.statistics.order.home');
    }
}
