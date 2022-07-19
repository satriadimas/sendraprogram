<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pelatih;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KelasTingkatanController extends Controller
{
    public function index()
    {
        $kelas_tingkatan = DB::table('kelas_tingkatan')->get();
        return view('kelas.list',['kelas_tingkatan' =>$kelas_tingkatan]);
    }


    // tampilan tambah data

    public function create()
    {
   
    return view ('kelas.add');
    }


    // tambah data users
    public function store(Request $request)
    {
        $data=$request->validate([
            'nama_kelas' => ['required'],
           
         
            
        ]);


        // MateriTari::create($data);
        DB::table('kelas_tingkatan')->insert($data);

        return redirect('/kelas')->with('Berhasil','Berhasil ditambahkan');
    }


     // Edit data users
     public function edit($id)
     {
     $kelas_tingkatan= DB::table('kelas_tingkatan')->where('id',$id)->first();
  
     return view ('kelas.edit' ,['kelas_tingkatan' =>$kelas_tingkatan]);
     }



    // update data users
    public function update(Request $request)
    {
  
   DB::table('kelas_tingkatan')->where('id',$request->id)->update([
    'nama_kelas' => $request->nama_kelas,
        
   
   ]);
   // alihkan halaman ke halaman users
   return redirect('/kelas');
   }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('kelas_tingkatan')->where('id',$id)->delete();
    
    // alihkan halaman ke halaman pegawai
    return redirect('/kelas');
    }
}
