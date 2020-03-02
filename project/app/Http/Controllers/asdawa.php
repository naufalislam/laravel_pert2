<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarSiswa;

class DaftarSiswaController extends Controller
{
   public function index(Request $request){
      $kelas = $request->kelas;
      if(empty($kelas)){
         $mahasiswa =  DaftarSiswa::orderBy('kelas', 'ASC')->orderBy('nim','ASC')->get();
      }else{
         $mahasiswa =  DaftarSiswa::where('kelas', $kelas)->orderBy('nim','ASC')->get();
      }

      return view('daftarsiswa', compact('mahasiswa'));
   }

   public function kelasA(){
      $mahasiswa =  DaftarSiswa::where('kelas', '6A')->orderBy('nim','ASC')->get();

      return view('daftarsiswa', compact('mahasiswa'));
   }

   public function kelasB(){
      $mahasiswa =  DaftarSiswa::where('kelas', '6B')->orderBy('nim','ASC')->get();

      return view('daftarsiswa', compact('mahasiswa'));
   }

   public function kelasC(){
      $mahasiswa =  DaftarSiswa::where('kelas', '6C')->orderBy('nim','ASC')->get();

      return view('daftarsiswa', compact('mahasiswa'));
   }

   public function kelasD(){
      $mahasiswa =  DaftarSiswa::where('kelas', '6D')->orderBy('nim','ASC')->get();

      return view('daftarsiswa', compact('mahasiswa'));
   }
}
