<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pelatih;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PelatihController extends Controller
{
    public function index()
    {
        $pelatih = DB::table('pelatih')->get();
        return view('pelatih.list',['pelatih' =>$pelatih]);
    }


    // tampilan tambah data

    public function create()
    {
   
    return view ('pelatih.add');
    }


    // tambah data users
    public function store(Request $request)
    {
        $data=$request->validate([
            'nama_pelatih' => ['required'],
            'alamat' => ['required','max:255'],
            'no_telp' => ['required','max:255'],
         
            
        ]);


        // MateriTari::create($data);
        DB::table('pelatih')->insert($data);

        return redirect('/pelatih')->with('Berhasil','Berhasil ditambahkan');
    }


     // Edit data users
     public function edit($id)
     {
     $pelatih= DB::table('pelatih')->where('id',$id)->first();
  
     return view ('pelatih.edit' ,['pelatih' =>$pelatih]);
     }



    // update data users
    public function update(Request $request)
    {
  
   DB::table('pelatih')->where('id',$request->id)->update([
    'nama_pelatih' => $request->nama_pelatih,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
   
   ]);
   // alihkan halaman ke halaman users
   return redirect('/pelatih');
   }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('pelatih')->where('id',$id)->delete();
    
    // alihkan halaman ke halaman pegawai
    return redirect('/pelatih');
    }
}
