<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\magang;
use App\Models\pembimbing;

class PembimbingController extends Controller
{
    public function alldata()
    {
        //$mahasiswa = DB::table('students')->get();
        $students = magang::all();
        return view ('/penilaianpembimbing',['students'=>$students]);
    }

    public function penilaiandetail(magang $student)
    {
        $jenis = pembimbing::all();
        //dd($penilaian);
        return view ('detailpembimbing', compact('student'), compact('jenis'));
    }

    public function addnilai(Request $request,$id)
    {
        $students = magang::find($id);
        if($students->pembimbing()->where('pembimbing_id', $request->pembimbing)->exists()){
            return redirect ('detailpembimbing/'.$id)->with('error', 'Data Penilaian Sudah Terdaftar');
        }
        $students->pembimbing()->attach($request->pembimbing,['nilai'=> $request->nilai]);
        return redirect ('detailpembimbing/'.$id)->with('status', 'Data Nilai Berhasil Ditambahkan');
    }
    public function deletenilai($idstudent, $idpembimbing)
    {
        $students = magang::find($idstudent);
        $students->pembimbing()->detach($idpembimbing);
        return redirect()->back()->with('status', 'Data Nilai Berhasil Dihapus');
    }
    public function editnilai(Request $request, $id)
    {
        $student = magang::find($id);
        $student->pembimbing()->updateExistingPivot($request->pk, ['nilai'=> $request->value]);
    }
}
