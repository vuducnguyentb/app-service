<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends BaseWebController
{
    public function index()
    {
        $settings = Setting::get();
        return view('admin.setting.index')->with([
            'data' => $settings
        ]);
    }

    public function create()
    {
        return view('admin.setting.add');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $setting = new Setting(
            [
                'key' => $data['key'],
                'name' => $data['title'],
                'details' => $data['details'],
            ]
        );
        $setting->save();
        return \redirect('/admin/settings');
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.edit')->with(
            [
                'setting' => $setting
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Setting::find($id)->update(
            [
                'key' => $data['key'],
                'name' => $data['title'],
                'details' => $data['details'],
            ]
        );
        return \redirect('/admin/settings');
    }

    public function destroy($id)
    {
        $entry = Setting::find($id);
        $entry->delete();
        return \redirect('/admin/settings');
    }
}
