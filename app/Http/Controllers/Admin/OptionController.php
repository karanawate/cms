<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function save(Request $req)
    {
        $fields = $req->only(config('scheme.fields'));
    try {
        foreach ($fields as $key => $value) {
            \App\Option::updateOrCreate([
                'name' => $key,
            ], [
                'name' => $key,
                'label' => title_case($key),
                'data' => $value,
                'group_name' => 'GENERAL',
            ]);
        }
        if($req->logo) {
            $logoURL = $req->logo->store('public');
            $logoURL = \Storage::url($logoURL);
            \App\Option::updateOrCreate([
                'name' => 'logo'
            ], [
                'name' => 'logo',
                'group_name' => 'GENERAL',
                'label' => 'Logo',
                'data' => $logoURL,
            ]);

        }
        if($req->favicon) {
            $logoURL = $req->favicon->store('public');
            $logoURL = \Storage::url($logoURL);
            \App\Option::updateOrCreate([
                'name' => 'favicon'
            ], [
                'name' => 'favicon',
                'group_name' => 'GENERAL',
                'label' => 'Favicon',
                'data' => $logoURL,
            ]);

        }

        return[
            'ok' =>true,
            'message' =>'setting save'
        ];
    } catch (\Throwable $th) {
        //throw $th;
        return[
            'ok' =>false,
            'message' =>$th->getMessage()
        ];
    }
    //dd($req->all(), $fields);
    }
}
