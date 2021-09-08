<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\magang;



class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mahasiswa = DB::table('students')->get();
        $students = magang::all();
        return view ('/admin',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi_magang' => 'required'
        ]);
        $Magang = new magang;
        $Magang->nama = $request->nama;
        $Magang->nama_perusahaan = $request->nama_perusahaan;
        $Magang->lokasi_magang = $request->lokasi_magang;
        $Magang->status = 1;

        $Magang->save();
        return redirect('/admin')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(magang $student)
    {
        return view ('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(magang $student)
    {
        return view ('editdata', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, magang $student)
    {
        $request->validate([
            'nama' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi_magang' => 'required'
        ]);
        magang::where('id', $student->id)
                ->update([
                    'nama'=> $request->nama,
                    'nama_perusahaan'=> $request->nama_perusahaan,
                    'lokasi_magang'=> $request->lokasi_magang
                ]);
                return redirect('/admin')->with('status', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(magang $student)
    {
        magang::destroy($student->id);
        return redirect('/admin')->with('status', 'Data Mahasiswa Berhasil Dihapus');
    }


}
