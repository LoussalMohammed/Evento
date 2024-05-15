<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function index() {
        $black_hover = 'Profile';
        return view('admin.admin-statistics', compact('black_hover'));
    }
}
