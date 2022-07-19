<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\KelasTingkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index($id)
    {
        // $users = DB::table('users')->where('nama', 'alberto')->first();

        // // foreach ($users as $user) {
        // //  echo $user->nama;
        // // }
        $users = DB::table('users')->where('id',$id)->first();
        // $user = User::query()->select('users.*', 'roles.role_nama','materi_tari.nama_tari','kelas_tingkatan.nama_kelas')
        // ->join('roles', 'users.role_id','=','roles.id')
        // ->join('materi_tari', 'users.matari_id','=','materi_tari.id')
        // ->join('kelas_tingkatan', 'users.keting_id','=','kelas_tingkatan.id')
        // ->get();
        
       $kelas_tingkatan=KelasTingkatan::all();
        $roles=Role::all();
     
        return view ('profil' ,['users'=>$users,'kelas_tingkatan' =>$kelas_tingkatan,'roles' =>$roles]);
    }

    public function update(Request $request)
    {
  
   DB::table('users')->where('id',$request->id)->update([
    'nama' => $request->nama,
    'alamat' => $request->alamat,
    'ttl' => $request->ttl,
    'agama' => $request->agama,
    'no_telp' => $request->no_telp,
    'jenis_kelamin' => $request->jenis_kelamin,
    'kota'=>$request->kota,
    'status_pendidikan'=>$request->status_pendidikan,
    'nisn'=>$request->nisn,
    // 'keting_id'=>$request->keting_id,
    'email' => $request->email,
    'ortu'=>$request->ortu,
    'ttlo'=>$request->ttlo,
    'pendidikan'=>$request->pendidikan,
    'pekerjaan'=>$request->pekerjaan,
    'alamat_ortu'=>$request->alamat_ortu,
    'telp_ortu'=>$request->telp_ortu,

  
   
   ]);
//    dd(($request->password));
   

   if (($request->password)){
    DB::table('users')->where('id',$request->id)->update([
    'password'=>Hash::make($request->password),
    ]);;
   }

   return redirect('/profil/{id}');

    }

    public function upload(Request $request)
{
    $images=null;

    if($request->file('images')){
        $images=$request->file('images')->store('post-images');
    }
// dd(str_replace('public/users-images','',$images));
// dd($request);
DB::table('users')->where('id',$request->id)->update([
   'images'=>str_replace('post-images/','',$images),
   //mengambil dari variable atas bukan form
//   dd($request)

    ]);
    // alihkan halaman ke halaman users
    return redirect('/profil/{id}')->with('Berhasil','Berhasil ditambahkan');
    }

    
}
