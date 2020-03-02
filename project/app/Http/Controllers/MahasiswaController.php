<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $kelas = $request->kelas;
        if(empty($kelas)){
           $mahasiswa =  Mahasiswa::orderBy('kelas', 'ASC')->orderBy('nim','ASC')->get();
        }else{
           $mahasiswa =  Mahasiswa::where('kelas', $kelas)->orderBy('nim','ASC')->get();
        }
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasA(){
        $_mahasiswa =  Mahasiswa::where('kelas', '6A')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasB(){
        $mahasiswa =  Mahasiswa::where('kelas', '6B')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasC(){
        $mahasiswa =  Mahasiswa::where('kelas', '6C')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasD(){
        $mahasiswa =  Mahasiswa::where('kelas', '6D')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
}
