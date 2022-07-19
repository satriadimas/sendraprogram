<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Verified;
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

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
}
