<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $guruCount = Guru::count();
        return view('admin.dashboard', compact('guruCount'));
    }
}
