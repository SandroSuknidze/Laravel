<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function profile() {
        $users = DB::select('SELECT * FROM users');
        foreach ($users as $user) {
        }
        return view('users.profile', ['users' => $user]);
    }


}