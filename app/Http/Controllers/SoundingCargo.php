<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form_sounding_cargo;
use App\form_sounding_oob;
use Carbon\Carbon;

class SoundingCargo extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function show(){
        return view('form-audit-cargo');
    }

    public function save(Request $request){
        
        $current_timestamp = Carbon::now();
        $flight = new form_sounding_cargo;
 
        $flight->no_sounding_cargo = $request->no_form;
        $flight->tannggal = $request->date;
        $flight->user_id = 1 ;
        $flight->office_id = $request->kapal;
        $flight->posisi = $request->posisi;
        $flight->start_at = $request->start;
        $flight->stop_at = $current_timestamp;
        $flight->kompartemen = $request->kompartemen;
        $flight->produk = $request->produk;
        $flight->tinggi_cairan = $request->ketinggian;
        $flight->volume = $request->volume;
        $flight->foto_sounding_cargo = $request->foto1;
        $flight->sounding_oob_id = 1;
 
        $flight->save();
 
        $oob = new form_sounding_oob;

        $oob->no_sounding_oob = 1;
        $oob->tinggi_cairan = $request->ketinggian2;
        $oob->volume = $request->volume2;
        $oob->lampiran = $request->lampiran;
        $oob->catatan = $request->catatan;
        $oob->temuan = $request->temuan;
        $oob->ttd_oob = $request->ttd;
        $oob->foto_sounding_oob = $request->upload2;

        $oob->save();
    }
}
