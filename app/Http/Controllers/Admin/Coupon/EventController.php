<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EventCoupon;

use Illuminate\Http\Request;
use Redirect;

class EventController extends Controller
{
    public function index()
    {
        $data = EventCoupon::where('is_deleted', 0)->get();
        return view('admin.coupon.event', ['coupons' => $data]);
    }

    public function store()
    {
        $params = Input::get('params');
    }

    public function setStatus()
    {
        $params = Input::get('params');
        // if (EventCoupon::find($params['id'])->update(['status' => $params['status']]))
    }
}
