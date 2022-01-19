<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;

class SettingController extends Controller
{
    public function create()
    {
        $setting = Setting::pluck('setting', 'name');
        return view('admin.setting.home_page', get_defined_vars());
    }

    public function store(Request $request)
    {
        $setting = $request->except('_token');
        foreach ($setting as $key => $value) {
            if (empty($value))
                continue;
            $set          = Setting::where('name', $key)->first() ?: new Setting();
            $set->name    = $key;
            $set->setting = $value;
            $set->save();
        }
        return redirect()->back()->with('success', 'Settings Saved Successfully !');
    }

    public function general()
    {
        $user = auth()->user();

        $setting = Setting::pluck('setting', 'name');

        return view('admin.setting.general', get_defined_vars());
    }
}
