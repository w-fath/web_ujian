<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateGuruController extends Controller
{

    public function view()
    {
        $gurus = Guru::orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.view_guru', compact('gurus'));
    }

    public function add()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:gurus,nip',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|unique:gurus,email',
            'password' => 'required|string|min:8',
        ]);

        Guru::create([
            'nip' => $request->nip,
            'name' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.view_guru')->with('success', 'Data berhasil ditambahkan!');
    }
}
