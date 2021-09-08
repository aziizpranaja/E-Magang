<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rating;

class GrafikController extends Controller
{
    public function index(rating $nilai)
    {
        $puas = rating::Where('nilai', $nilai=('puas'))->count();
        $tidakpuas = rating::Where('nilai', $nilai=('tidak puas'))->count();
        $data = [['name'=>'puas', 'y'=>$puas],['name'=>'tidak puas', 'y'=>$tidakpuas]];
        return view('grafik', compact('data'));
    }
}
