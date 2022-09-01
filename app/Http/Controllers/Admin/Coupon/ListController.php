<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MemberCoupon;

use Illuminate\Http\Request;
use Redirect;

class ListController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $page_number = (int) $request->input('sGo', 1);
        $page_size = (int) $request->input('sPageSize', 10);
        $st_date = $request->input('BEGIN_DT', '');
        $ed_date = $request->input('END_DT', '');
        $status = $request->input('sUsePsbYn', '');
        $type = (int)$request->input('sChargeDetCd', 0);
        $issue_category = (int)$request->input('sIssueDvsCd', 0);
        $member_name = $request->input('sMemNm', '');
        $member_id = $request->input('sMemId', 0);

        $sql = MemberCoupon::with('member')->when($st_date != '', function($query) use ($st_date) {
                $query->whereDate('effective_st_date', '<=', $st_date);
            })->when($type != 0, function($query) use ($type) {
                $query->where('coupon_type', $type);
            })->when($ed_date != '', function($query) use ($ed_date) {
                $query->where('effective_ed_date', '>=', $ed_date);
            })->when($status != '', function($query) use ($status) {
                $query->where('status', $status);
            })->when($issue_category != 0, function($query) use ($issue_category) {
                $query->where('issue_category', $issue_category);
            })->when($member_id != 0, function($query) use ($member_id) {
                $query->where('member.id', $member_id);
            })->when($member_name != '', function($query) use ($member_name) {
                $query->where('name', 'LIKE', "%$member_name%");
            });
        $total_count = $sql->count();
        $page_count = ceil(1.0 * $total_count / $page_size);
        $page_number = ($page_number > $page_count ? $page_count : $page_number);
        $page_number = ($page_number < 1 ? 1 : $page_number);
        $coupons = $sql->offset(($page_number - 1) * $page_size)->limit($page_size)->get();
        return view('admin.coupon.list', [
            'coupons' => $coupons,
            'users' => $users,
            'total_count' => $total_count,
            'page_number' => $page_number,
            'page_size' => $page_size,
            'page_count' => $page_count,
            'BEGIN_DT' => $st_date,
            'END_DT' => $ed_date,
            'sUsePsbYn' => $status,
            'sChargeDetCd' => $type,
            'sIssueDvsCd' => $issue_category,
            'sMemNm' => $member_name,
            'sMemId' => $member_id
        ]);
    }

    public function getMembers()
    {
        $members = User::where('status', 1)->get();
        $data['success'] = true;
        $data['data'] = $members;
        return $data;
    }

    public function distributeToAll(Request $request)
    {
        $st_date = $request->input('BEGIN_DT', '');
        $ed_date = $request->input('END_DT', '');
        $status = $request->input('sUsePsbYn', '');
        $type = (int)$request->input('sChargeDetCd', 0);
        $issue_category = (int)$request->input('sIssueDvsCd', 0);
        $currency_unit = $request->input('sCrUnit', '');
        $coupon_amount = $request->input('sMny', 0);

        $members = User::where('status', 1)->get();
        $coupons = [];
        $index = 0;
        foreach ($members as $member) {
            $coupon = [];
            $coupon['effective_st_date'] = $st_date;
            $coupon['effective_ed_date'] = $ed_date;
            $coupon['status'] = $status;
            $coupon['issue_category'] = $issue_category;
            $coupon['coupon_type'] = $type;
            $coupon['currency_unit'] = $currency_unit;
            $coupon['coupon_amount'] = $coupon_amount;
            $coupon['member_id'] = $member->id;
            $coupons[$index++] = $coupon;
        }
        try {
            // dd($coupons);
            if (MemberCoupon::insert($coupons)) {
                $data['success'] = true;
            } else {
                $data['success'] = false;
            }
        } catch (\Throwable $th) {
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }
        return response()->json(['data' => $data]);

    }
 
    public function distributeToOne(Request $request)
    {
        $st_date = $request->input('BEGIN_DT', '');
        $ed_date = $request->input('END_DT', '');
        $status = $request->input('sUsePsbYn', '');
        $type = (int)$request->input('sChargeDetCd', 0);
        $issue_category = (int)$request->input('sIssueDvsCd', 0);
        $currency_unit = $request->input('sCrUnit', '');
        $coupon_amount = $request->input('sMny', 0);
        $member_id = $request->input('member_id', 0);

        $coupon = new MemberCoupon;
        $coupon->effective_st_date = $st_date;
        $coupon->effective_ed_date = $ed_date;
        $coupon->status = $status;
        $coupon->issue_category = $issue_category;
        $coupon->coupon_type = $type;
        $coupon->currency_unit = $currency_unit;
        $coupon->coupon_amount = $coupon_amount;
        $coupon->member_id = $member_id;
        try {
            if ($coupon->save()) {
                $data['success'] = true;
            } else {
                $data['success'] = false;
            }
        } catch (\Throwable $th) {
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }
        return response()->json(['data' => $data]);

    }
    // public function get
}
