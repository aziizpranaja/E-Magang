<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\presensi;
use App\Models\magang;
use App\Models\penilaian;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('presensi.masuk');
    }

    public function keluar()
    {
        return view('presensi.keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');


            presensi::create([
                'user_id'=>auth()->user()->id,
                'tgl'=>$tanggal,
                'jammasuk'=>$localtime,
            ]);
        return redirect('/presensi/masuk')->with('status', 'Berhasil Absen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function halamanrekap()
    {
        return view('presensi.halamanrekap');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampildatakeseluruhan($tglawal)
    {
        $presensi = presensi::with('user')->where('tgl', [$tglawal])->orderBy('tgl','asc')->get();
        return view('presensi.rekapkaryawan', compact('presensi'));
    }

    
    public function presensipulang()
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = presensi::where([
            ['user_id','=', auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        
        $dt=[
            'jamkeluar'=>$localtime,
            'jamkerja'=>date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar=="")
        {
            $presensi->update($dt);
            return redirect('/presensi/keluar');
        }else{
            dd("sudah ada");
        }
    }

    public function alldata()
    {
        $students = magang::all();
        return view ('/tampil',['students'=>$students]);
    }

    public function detail(magang $student)
    {
        $jenis = penilaian::all();
        //dd($penilaian);
        return view ('tampildetail', compact('student'), compact('jenis'));
    }

    public function penguji(magang $student)
    {
        $jeniss = penguji::all();
        //dd($penilaian);
        return view ('tampildetail', compact('student'), compact('jeniss'));
    }
    public function pembimbing(magang $student)
    {
        $jenissa = pembimbing::all();
        //dd($penilaian);
        return view ('tampildetail', compact('student'), compact('jenissa'));
    }
}
