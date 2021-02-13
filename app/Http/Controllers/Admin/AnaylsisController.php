<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnaylsisController extends Controller
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
                'group_name' => 'Anaylsis',
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



