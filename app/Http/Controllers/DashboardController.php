<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection\links;

class DashboardController extends Controller {
    //
    public function index() {
        return view('dashboard');
    }

    public function redirect() {
        return redirect()->route('dashboard');
    }
}
