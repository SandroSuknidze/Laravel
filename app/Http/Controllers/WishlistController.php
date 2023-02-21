<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist() {
        return view('users.wishlist', ['listings' => auth()->user()->listings()->get()]);
    }
}