<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\magang;

class ApproveController extends Controller
{
    public function index()
    {
        $approve = magang::all();
        return view ('/approve', compact('approve'));
    }

    public function approved($id)
    {
        try {
            magang::where('id',$id)->update([
                'status'=>2
            ]);

            \Session::flash('sukses', 'Laporan Berhasil di Approve');
        } catch (\Exeption $th) {
            \Session::flash('gagal', $th->getMessage());
        }
        return redirect()->back();
    }
}
