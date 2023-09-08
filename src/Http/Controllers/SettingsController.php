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
        $data = request()->all();
        unset($data['_token']);

        foreach($data as $id => $value) {
            $m = Setting::find($id);
            $m->value = $value;
            $m->save();
        }
        
        return redirect()->back();
    }
}
