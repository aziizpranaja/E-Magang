<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\magang;
use App\Models\penilaian;

class PenilaianController extends Controller
{
    public function alldata()
    {
        //$mahasiswa = DB::table('students')->get();
        $students = magang::all();
        return view ('/penilaian',['students'=>$students]);
    }

    public function penilaiandetail(magang $student)
    {
        $jenis = penilaian::all();
        //dd($penilaian);
        return view ('detail', compact('student'), compact('jenis'));
    }

    public function addnilai(Request $request,$id)
    {
        $students = magang::find($id);
        if($students->penilaian()->where('penilaian_id', $request->penilaian)->exists()){
            return redirect ('detail/'.$id)->with('error', 'Data Penilaian Sudah Terdaftar');
        }
        $students->penilaian()->attach($request->penilaian,['nilai'=> $request->nilai]);
        return redirect ('detail/'.$id)->with('status', 'Data Nilai Berhasil Ditambahkan');
    }

    public function deletenilai($idstudent, $idpenilaian)
    {
        $students = magang::find($idstudent);
        $students->penilaian()->detach($idpenilaian);
        return redirect()->back()->with('status', 'Data Nilai Berhasil Dihapus');
    }
}
