<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\magang;
use App\Models\penguji;

class PengujiController extends Controller
{
    public function alldata()
    {
        //$mahasiswa = DB::table('students')->get();
        $students = magang::all();
        return view ('/penilaianpenguji',['students'=>$students]);
    }
    public function penilaiandetail(magang $student)
    {
        $jenis = penguji::all();
        //dd($penilaian);
        return view ('detailpenguji', compact('student'), compact('jenis'));
    }
    public function addnilai(Request $request,$id)
    {
        $students = magang::find($id);
        if($students->penguji()->where('penguji_id', $request->penguji)->exists()){
            return redirect ('detailpenguji/'.$id)->with('error', 'Data Penilaian Sudah Terdaftar');
        }
        $students->penguji()->attach($request->penguji,['nilai'=> $request->nilai]);
        return redirect ('detailpenguji/'.$id)->with('status', 'Data Nilai Berhasil Ditambahkan');
    }
    public function deletenilai($idstudent, $idpenguji)
    {
        $students = magang::find($idstudent);
        $students->penguji()->detach($idpenguji);
        return redirect()->back()->with('status', 'Data Nilai Berhasil Dihapus');
    }
    public function editnilai(Request $request, $id)
    {
        $student = magang::find($id);
        $student->penguji()->updateExistingPivot($request->pk, ['nilai'=> $request->value]);
    }
}
