<?php

namespace App\Http\Controllers\Admin\Announcement;

use App\Http\Controllers\Controller;
use App\Models\Announcement\Comment;

use Illuminate\Http\Request;
use Redirect;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $page_number = (int) $request->input('sGo', 1);
        $page_size = (int) $request->input('sPageSize', 10);
        $filter_name = $request->input('sMemNm', '');
        $filter_subject = $request->input('sSbj', '');
        $filter_content = $request->input('sCont', '');
        $filter_id = (int) $request->input('sId', 0);

        $sql = Comment::when($filter_name != '', function($query) use ($filter_name) {
                $query->where('creator', 'LIKE', "%$filter_name%");
            })->when($filter_subject != '', function($query) use ($filter_subject) {
                $query->where('title', 'LIKE', "%$filter_subject%");
            })->when($filter_content != '', function($query) use ($filter_content) {
                $query->where('content', 'LIKE', "%$filter_content%");
            })->when($filter_id != '', function($query) use ($filter_id) {
                $query->where('id', '=', "$filter_id");
            });
        $total_count = $sql->count();
        $page_count = ceil(1.0 * $total_count / $page_size);
        $page_number = ($page_number > $page_count ? $page_count : $page_number);
        $page_number = ($page_number < 1 ? 1 : $page_number);
        $service_inquires = $sql->offset(($page_number - 1) * $page_size)->limit($page_size)->get();

        $result = [];
        foreach ($service_inquires as $item) {
            array_push($result, [
                'id' => $item->id,
                'title' => $item->title,
                'content' => $item->content,
                'view_count' => $item->view_count,
                'creator' => $item->creator,
                'created_at' => date('Y-m-d H:i', strtotime($item->created_at)),
            ]);
        }
        return view('admin.announcement.service_inquire', [
            'results' => $result,
            'total_count' => $total_count,
            'page_number' => $page_number,
            'page_size' => $page_size,
            'page_count' => $page_count,
            'filter_name' => $filter_name,
            'filter_subject' => $filter_subject,
            'filter_content' => $filter_content,
            'filter_id' => $filter_id,
        ]);
    }
}
