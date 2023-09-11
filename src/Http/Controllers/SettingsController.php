<?php

namespace KonstantinFilin\LaraSettings\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use KonstantinFilin\LaraSettings\Models\Setting;

class SettingsController extends BaseController
{
    public function index() {
        $items = Setting::all();
        return view('larasettings::index', [
            'items' => $items
        ]);
    }

    public function save() {
        $settings = Setting::all();
        $request = request();
        
        foreach($settings as $setting) {
            $defaultValue = $setting->isTypeBool ? 0 : '';
            $setting->value = $request->post($setting->id, $defaultValue);
            $setting->save();
        }
        
        return redirect()->back();
    }
}
