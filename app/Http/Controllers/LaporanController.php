<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\laporan;

class LaporanController extends Controller
{
    public function tampil()
    {
        return view('laporan');
    }
    public function alldata()
    {
        $laporan = laporan::all();
        return view('rekaplaporan', compact('laporan'));
    }
    public function addlaporan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'laporan' => 'required | max:10000 | mimes:pdf'
        ]);
        laporan::create([
            'nama'=>auth()->user()->name,
            'laporan'=>$request->file('laporan')->store('public'),
        ]);
        
        return redirect('/laporan')->with('status','Laporan berhasil di upload');
    }
}
