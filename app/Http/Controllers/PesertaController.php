<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use PDF;

class PesertaController extends Controller
{
    public function index()
    {
        $users=User::where('role_id',2)->get();

        // // foreach ($users as $user) {
        // //  echo $user->nama;
        // // }


        // dd($users);

        $users = User::query()->select('users.*', 'roles.role_nama')
        ->join('roles', 'users.role_id','=','roles.id')
        ->where('role_id',2)
        ->get();
        return view('peserta.list',['users' =>$users]);;
    }


    
    public function create()
    {
    $roles=Role::all();
    return view ('peserta.add', ['roles' =>$roles]);
    }




    // tambah data users
    public function store(Request $request)
    {
        $data= $request->validate([
            'nama' => ['required','max:255'],
            'alamat' =>['required','max:255'],
            'ttl' =>['required','max:255'],
            'agama' =>['required','max:255'],
            'no_telp'=>['required','max:255'],
            'jenis_kelamin' =>['required'],
            'role_id'=>['required'],
            'email' =>['required', 'email:dns','unique:users'],
            'password'=>['required','max:255','min:5'],
        ]);


        
        $data['password']=Hash::make($data['password']);
        $data['role_id']=2;
        user::create($data);
       

        return redirect('/peserta')->with('Berhasil','Berhasil ditambahkan');
    }

    // Edit data users
    public function edit($id)
    {
    $user = DB::table('users')->where('id',$id)->first();
    $roles=Role::all();
    return view ('peserta.edit' ,['users' =>$user],['roles' =>$roles]);
    }
    
    
    // update data users
    public function update(Request $request)
     {
   
    DB::table('users')->where('id',$request->id)->update([
    'nama' => $request->nama,
    'alamat' => $request->alamat,
    'ttl' => $request->ttl,
    'agama' => $request->agama,
    'no_telp' => $request->no_telp,
    'jenis_kelamin' => $request->jenis_kelamin,
    'role_id'=>$request->role_id,
'keting_id'=>$request->keting_id,
    'email' => $request->email,
    
    ]);
    // alihkan halaman ke halaman users
    return redirect('/peserta');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('users')->where('id',$id)->delete();
    
    // alihkan halaman ke halaman pegawai
    return redirect('/peserta');
    }

    public function downloadPDF() {
        $users=User::where('role_id',2)->get();

        $users = User::query()->select('users.*', 'kelas_tingkatan.nama_kelas')
        ->join('kelas_tingkatan', 'users.keting_id','=','kelas_tingkatan.id')
        ->where('role_id',2)
        ->orderBy('kelas_tingkatan.nama_kelas')
        ->get();

        $pdf = PDF::loadView('Peserta.pdf', compact('users'));
        
        return $pdf->download('Pendaftar.pdf');
    }   
}