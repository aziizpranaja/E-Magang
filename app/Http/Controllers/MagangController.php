<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\magang;
use App\Models\User;

class MagangController extends Controller
{
    public function add()
    {
        return view('magang.add');
    }
    public function industri(User $level)
    {
        $Users = User::Where('level', $level = ('industri'))->get();
        return view ('magang.add', compact('Users'));
    }
    public function tambah(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi_magang' => 'required'
        ]);
        $data = magang::firstOrCreate(
            ['nama'=>\Auth::user()->name],
            ['nama'=>\Auth::user()->name, 'nama_perusahaan'=>$request->nama_perusahaan, 'lokasi_magang'=>$request->lokasi_magang, 'status'=>1]
        );
        return redirect('/magang/add')->with('status', 'Data Berhasil Dikirim');
    }
}
