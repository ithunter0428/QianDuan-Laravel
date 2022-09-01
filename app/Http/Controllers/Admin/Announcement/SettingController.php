<?php

namespace App\Http\Controllers\Admin\Announcement;

use App\Http\Controllers\Controller;
use App\Models\Announcement\AnnouncementSettings;

use Illuminate\Http\Request;
use Redirect;

class SettingController extends Controller
{
    public function index()
    {
        $settings = AnnouncementSettings::get();
        return view('admin.announcement.setting', [
            'settings' => $settings,
        ]);
    }

    public function update(Request $request, AnnouncementSettings $setting)
    {
        try {
            $setting->use_password = $request->use_password;
            $setting->use_title = $request->use_title;
            $setting->use_state = $request->use_state;
            $setting->write_permission = $request->write_permission;
            $setting->view_all = $request->view_all;
            $setting->comment_permission = $request->comment_permission;
            $setting->is_using = $request->is_using;
            if ($setting->save()) {
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
}
