<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MemberCoupon;

use Illuminate\Http\Request;
use Redirect;

class ListController extends Controller
{
    public function index()
    {

        return view('admin.coupon.list');
    }

    public function getSearchData()
    {
        $params = Input::get('params');
        $query = DB::table('member_coupons');
        if ($params['st_date']) $query = $query->where('effective_st_date', '<=', $params['st_date']);
        if ($params['ed_date']) $query = $query->where('effective_ed_date', '>=', $params['ed_date']);
        if ($params['can_use']) $query = $query->where('can_use', $params['can_use']);
        // if ($params)
    }

    // public function get
}
