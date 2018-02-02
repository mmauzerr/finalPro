<?php

namespace App\Http\Controllers;

use Request;

class ManageController extends Controller
{
    public function index() {
        return redirect()->route('manage.dashboard');
    }

    public function dashboard() {
        return view('manage.dashboard');
    }
}
