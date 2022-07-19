<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // $users = DB::table('users')->where('nama', 'alberto')->first();

        // // foreach ($users as $user) {
        // //  echo $user->nama;
        // // }


        // dd($users);
        return view('dashboard');
    }
}
