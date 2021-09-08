<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\magang;

class ApiController extends Controller
{
    public function editnilai(Request $request, $id)
    {
        $student = magang::find($id);
        $student->penilaian()->updateExistingPivot($request->pk, ['nilai'=> $request->value]);
    }
}
