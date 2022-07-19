<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use App\Helpers\Helper;
use Carbon\Carbon;
use App\Models\KelasTingkatan;
use App\Models\MateriTari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as AuthUser;

class PendaftaranController extends Controller
{
    

    
    public function create()
    {
    $roles=Role::all();
   $users=User::all();
    $kelas_tingkatan=KelasTingkatan::all();

    return view ('pendaftaran.add', ['users' =>$users],['kelas_tingkatan' =>$kelas_tingkatan],['roles' =>$roles]);
    }



    public function create2($id)
    {
    $roles=Role::all();
    // $materi_tari=MateriTari::all();
    $kelas_tingkatan=KelasTingkatan::all();
    $users=User::all();
    DB::table('users')->where('id',$id)->first();

    return view ('pendaftaran.add2', ['roles' =>$roles],['id' =>$id],['users' =>$users],['kelas_tingkatan' =>$kelas_tingkatan]);
    }




    // tambah data users
    public function store(Request $request)
    {
        $data= $request->validate([
            'nama' => ['required','max:255'],
            'alamat' =>['required','max:255'],
            'ttl' =>['required','max:255'],
            'tgl_lahir' =>['required','max:255'],
            'agama' =>['required','max:255'],
            'no_telp'=>['required','max:14'],
            'jenis_kelamin' =>['required'],
             //'role_id'=>['required'],
            'keting_id'=>['required'],
            'kota'=>['required'],
            'nisn'=>['required'],
            'status_pendidikan'=>['required'],
            'email' =>['required', 'email:dns','unique:users'],
            'password'=>['required','max:255','min:5'],
        ]);

        
        $token = Str::random(40);
        $data['remember_token']=$token;
        // $data['token']=null;
        $data['password']=Hash::make($data['password']);
        $data['role_id']=2;
        $generator= Helper::IDGenerator(new User, 'pendaftaran_id', 2, 'PDF'); /** Generate id */
        $pendaftaran_id = new User;
        $pendaftaran_id->pendaftaran_id =$generator;
        $data['pendaftaran_id']=$generator;
        // dd($data);
        $dataid=user::create($data);
        $dataID = $dataid->id;
       
        Mail::send('verif-email', ['token' => $token, 'email' => $request->email], function ($message) use ($request) {
            $message->to($request->email);
            $message->from($address = 'contact@sakata-id.site', $name = 'SAKATA');
            $message->subject('Email verification');
        });
        
        return redirect('/add2/'.$dataID);
    }

    

    public function store2(Request $request)
    {
        $request->validate([
            'ortu'=>['required','max:255'],
            'ttlo'=>['required'],
            'tgl_lahir_ortu'=>['required'],
            'pendidikan'=>['required'],
            'pekerjaan'=>['required'],
            'alamat_ortu'=>['required'],
            'telp_ortu'=>['required'],
            
           
        ]);
        

        
        DB::table('users')->where('id',$request->id)->update([
            'ortu'=>$request->ortu,
            'ttlo'=>$request->ttlo,
            'tgl_lahir_ortu'=>$request->tgl_lahir_ortu,
            'pendidikan'=>$request->pendidikan,
            'pekerjaan'=>$request->pekerjaan,
            'alamat_ortu'=>$request->alamat_ortu,
            'telp_ortu'=>$request->telp_ortu,
        ]);


        

        return redirect('/login')->with('Berhasil','Pendaftaran berhasil! Silahkan verifikasi email terlebih dahulu');
    }


    public function verification(Request $request)
    {
        
        if ($request->token != null) {
            $user = User::where('remember_token', $request->token)->first();
            // dd($user);
            if ($user) {
                $dt = Carbon::now();
                $dateNow = $dt->toDateTimeString();

                User::where('id', $user->id)->update([
                    'remember_token' => '',
                    'email_verified_at' => $dateNow,
                ]);

                return redirect('/login')->with('Berhasil1','Verifikasi akun berhasil');
            } else {
                return redirect('/login')->with('Failed','Token tidak valid');
            }
        } else {
            return redirect('/login')->with('NotValid','Verifikasi tidak valid');
        }
    }

   
}
