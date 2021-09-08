<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\rating;

class RatingController extends Controller
{
    public function rating(Request $request)
    {
        $data = rating::firstOrCreate(
            ['user_id'=>\Auth::user()->id],
            ['nilai'=>$request->nilai, 'user_id'=>\Auth::user()->id]
        );
        return redirect()->back()->with('status', 'Terima Kasih Telah Menilai');
    }
}
