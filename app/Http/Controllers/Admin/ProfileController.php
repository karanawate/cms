<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $current_user = Auth::user()->id;
        dd($current_user);
        return view('admin/profile');
    }

}
