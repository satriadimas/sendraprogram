<?php

namespace App\Http\Controllers;

use App\Models\KelasTingkatan;
use App\Models\User;
use App\Models\MateriTari;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MatariController extends Controller
{
    public function index()
    {
        $materi_tari = MateriTari::query()->select('materi_tari.*', 'kelas_tingkatan.nama_kelas')
        ->join('kelas_tingkatan', 'materi_tari.keting_id','=','kelas_tingkatan.id')
        ->get();
        return view('matari.list',['materi_tari' =>$materi_tari]);
    }


    // tampilan tambah data

    public function create()
    {
    $kelas_tingkatan=KelasTingkatan::all();
    return view ('matari.add',['kelas_tingkatan'=>$kelas_tingkatan]);
    }


    // tambah data users
    public function store(Request $request)
    {
        $data=[
            'nama_tari' => $request->nama_tari,
            'keting_id' => $request->keting_id,
         
            
        ];


        // MateriTari::create($data);
        DB::table('materi_tari')->insert($data);

        return redirect('/matari')->with('Berhasil','Berhasil ditambahkan');
    }


     // Edit data users
     public function edit($id)
     {
     $materi_tari = DB::table('materi_tari')->where('id',$id)->first();
     $kelas_tingkatan=KelasTingkatan::all();
     return view ('matari.edit' ,['materi_tari' =>$materi_tari,'kelas_tingkatan' =>$kelas_tingkatan]);
     }



    // update data users
    public function update(Request $request)
    {
  
   DB::table('materi_tari')->where('id',$request->id)->update([
    'nama_tari' => $request->nama_tari,
    'keting_id' => $request->keting_id,
   
   ]);
   // alihkan halaman ke halaman users
   return redirect('/matari');
   }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('materi_tari')->where('id',$id)->delete();
    
    // alihkan halaman ke halaman pegawai
    return redirect('/matari');
    }
}
