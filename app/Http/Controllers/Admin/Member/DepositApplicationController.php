<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Models\DepositApplication;

use Illuminate\Http\Request;
use Redirect;

class DepositApplicationController extends Controller
{
    public function index(Request $request)
    {
        $page_number = (int) $request->input('sGo', 1);
        $page_size = (int) $request->input('sPageSize', 10);
        $filter_from_date = $request->input('sBeginDt', '');
        $filter_to_date = $request->input('sEndDt', '');
        $filter_category = $request->input('sReqDvsCode', '');
        $filter_status = $request->input('sCompYn', '');
        $filter_application_number = $request->input('sReqSeq', '');
        $filter_member_name = $request->input('sMemNm', '');
        $filter_remitter = $request->input('sPayInNm', '');
        $filter_account_number = $request->input('sPayInAcc', '');

        $sql = DepositApplication::when($filter_category != '', function ($query) use ($filter_category) {
                $query->where('application_category', "%$filter_category%");
            })->when($filter_status != '', function ($query) use ($filter_status) {
                $query->where('status', 'LIKE', "%$filter_status%");
            })->when($filter_application_number != '', function ($query) use ($filter_application_number) {
                $query->where('id', 'LIKE', "%$filter_application_number%");
            })->when($filter_member_name != '', function ($query) use ($filter_member_name) {
                $query->where('member_name', 'LIKE', "%$filter_member_name%");
            })->when($filter_remitter != '', function ($query) use ($filter_remitter) {
                $query->where('remitter', 'LIKE', "%$filter_remitter%");
            })->when($filter_account_number != '', function ($query) use ($filter_account_number) {
                $query->where('account_information', 'LIKE', "%$filter_account_number%");
            });
        $total_count = $sql->count();
        $page_count = ceil(1.0 * $total_count / $page_size);
        $page_number = ($page_number > $page_count ? $page_count : $page_number);
        $page_number = ($page_number < 1 ? 1 : $page_number);
        $list = $sql->offset(($page_number - 1) * $page_size)->limit($page_size)->get();

        // dd($page_number);
        return view('admin.member.deposit_application', [
            'list' => $list,
            'total_count' => $total_count,
            'page_number' => $page_number,
            'page_size' => $page_size,
            'page_count' => $page_count,
            'filter_from_date' => $filter_from_date,
            'filter_to_date' => $filter_to_date,
            'filter_category' => $filter_category,
            'filter_status' => $filter_status,
            'filter_application_number' => $filter_application_number,
            'filter_member_name' => $filter_member_name,
            'filter_remitter' => $filter_remitter,
            'filter_account_number' => $filter_account_number,
        ]);
    }

    public function view_usage(Request $request)
    {
        $page_number = (int) $request->input('sGo', 1);
        $page_size = (int) $request->input('sPageSize', 10);
        $filter_from_date = $request->input('sBeginDt', '');
        $filter_to_date = $request->input('sEndDt', '');
        $filter_category = $request->input('sReqDvsCode', '');
        $filter_status = $request->input('sCompYn', '');
        $filter_application_number = $request->input('sReqSeq', '');
        $filter_member_name = $request->input('sMemNm', '');
        $filter_remitter = $request->input('sPayInNm', '');
        $filter_account_number = $request->input('sPayInAcc', '');

        return view('admin.member.deposit_usage', [
            // 'list' => $list,
            // 'total_count' => $total_count,
            // 'page_number' => $page_number,
            // 'page_size' => $page_size,
            // 'page_count' => $page_count,
            'filter_from_date' => $filter_from_date,
            'filter_to_date' => $filter_to_date,
            'filter_category' => $filter_category,
            'filter_status' => $filter_status,
            'filter_application_number' => $filter_application_number,
            'filter_member_name' => $filter_member_name,
            'filter_remitter' => $filter_remitter,
            'filter_account_number' => $filter_account_number,
        ]);
    }

    public function view_without_passbook(Request $request)
    {
        $page_number = (int) $request->input('sGo', 1);
        $page_size = (int) $request->input('sPageSize', 10);
        $filter_from_date = $request->input('sBeginDt', '');
        $filter_to_date = $request->input('sEndDt', '');
        $filter_category = $request->input('sReqDvsCode', '');
        $filter_status = $request->input('sCompYn', '');
        $filter_application_number = $request->input('sReqSeq', '');
        $filter_member_name = $request->input('sMemNm', '');
        $filter_remitter = $request->input('sPayInNm', '');
        $filter_account_number = $request->input('sPayInAcc', '');

        return view('admin.member.deposit_without_passbook', [
            // 'list' => $list,
            // 'total_count' => $total_count,
            // 'page_number' => $page_number,
            // 'page_size' => $page_size,
            // 'page_count' => $page_count,
            'filter_from_date' => $filter_from_date,
            'filter_to_date' => $filter_to_date,
            'filter_category' => $filter_category,
            'filter_status' => $filter_status,
            'filter_application_number' => $filter_application_number,
            'filter_member_name' => $filter_member_name,
            'filter_remitter' => $filter_remitter,
            'filter_account_number' => $filter_account_number,
        ]);
    }
}
