<?php

namespace App\Http\Controllers\Admin;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $current_user = Auth::user()->id;
        $users = \DB::table('users')->where('id', $current_user)->get();
        //dd($users);
        return view('admin/profile', compact('users'));
    }
    public function saved(Request $request)
    {
        //dd($request->all());
                try {
                    $id = $request->userid;
                    $userid = \App\User::find($id);
                    $userid->name = $request->name;
                    $userid->phone_number = $request->phone_number;
                    $userid->position = $request->position;
                    $userid->address = $request->address;
                    $userid->nickname = $request->nickname;
                    $userid->phonetic_name = $request->phonetic_name;
                    $userid->save();
            return[
                "ok" =>true,
                "message" =>"update succefully User",
            ];
        } catch (\Throwable $th) {
            return[
                "ok" =>false,
                "message" =>$th->getmessage(),
            ];

        }
    }

}
