<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function daftarsiswa(){
        $task =[
            'pergi bekerja',
            'pergi belanja',
            'pergi sekolah'
        ];
        return view('daftar-siswa',[
            'task' => $task,
            'foo' => request('task'),
        ]);
    }

    public function daftarsiswa6a(){
        return view('daftar-siswa-6A');
    }

    public function mahasiswa(){
        return view('daftarsiswa');
    }
}
