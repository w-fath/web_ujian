<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateSiswaController extends Controller
{
    public function view()
    {
        $siswas = User::orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.view_guru', compact('siswas'));
    }
}
