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
}
