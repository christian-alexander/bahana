<?php

namespace App\Http\Controllers;
use App\AuditTanki;

use Illuminate\Http\Request;

class AuditTankiController extends Controller
{
    public function show(){
        return view('form-audit-tanki');
    }

    public function save(Request $request){
        AuditTanki::create([
            'user_id' => $request->user_id,
            'office_id' => $request->office_id,
            'no_form' => $request->no_form,
            'tanggal' => $request->tanggal,
            'posisi' => $request->posisi,
            'start_at' => $request->start_at,
            'stop_at' => $request->stop_at,
            'catatan' => $request->catatan,
            'foto' => $request->foto,
            'temuan' => $request->temuan,
            'ttd' => $request->ttd,
        ]);
    }
}
