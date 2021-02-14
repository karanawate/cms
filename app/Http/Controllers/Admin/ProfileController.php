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

}
