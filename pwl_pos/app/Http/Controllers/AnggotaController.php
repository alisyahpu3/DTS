<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
class AnggotaController extends Controller
{
    //
    public function cekObject(){
        $anggota=new Anggota;
        dump($anggota);
    }
    public function insert(){
        $anggota=new Anggota;
        $anggota->nip='12215231';
        $anggota->nama='putri';
        $anggota->tanggal_lahir='2003-04-11';
        $anggota->nilai='3.40';
        $anggota->save();
        echo"data berhasil disave";

    }
    public function update(){
        $anggota = Anggota::find(1);
        $anggota->nama='dono';
        $anggota->nilai='3.00';
        $anggota->save();
        echo "data berhasil diupdate";
    }
    public function delete(){
        $anggota = Anggota::find(1);
        $anggota->delete();
        echo "data dihapus";
    }
    public function all(){
        $result= Anggota::all();
        return view('tampilkan_anggota',['anggota'=>$result]);
    }
    public function find(){
        $result=Anggota::find(5);
        return view('tampilkan_anggota',['anggota'=>[$result]]);
    }
    public function getWhere(){
        $result=Anggota::where('nilai','>','3.3')
        ->orderBy('nama','desc')
        ->get();
        return view('tampilkan_anggota',['anggota'=>$result]);
    }

}
