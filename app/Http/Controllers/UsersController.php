<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use App\Helpers\Helper;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KelasTingkatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use GrahamCampbell\ResultType\Success;
use Illuminate\Foundation\Auth\User as AuthUser;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        // ->where('email','LIKE', '%bebeto%')
        ->get();

        // // foreach ($users as $user) {
        // //  echo $user->nama;
        // // }

        // 'materi_tari.nama_tari','kelas_tingkatan.nama_kelas'
        // dd($users);

        $users = User::query()->select('users.*', 'roles.role_nama') 
        ->join('roles', 'users.role_id','=','roles.id')
        // ->join('materi_tari', 'users.matari_id','=','materi_tari.id')
        // ->join('kelas_tingkatan', 'users.keting_id','=','kelas_tingkatan.id')
        ->get();
        return view('users.list',['users' =>$users]);
    }


    
    public function create()
    {
    $roles=Role::all();
    $kelas_tingkatan=KelasTingkatan::all();
    return view ('users.add', ['roles' =>$roles],['kelas_tingkatan' =>$kelas_tingkatan]);
    }




    // public function verify(Request $request){
    //     $token=$request->token;
    //     $verifyuser= VerifyUser::where('token',$token)->first();
    //     if(!is_null($verifyuser)){
    //         $user =$verifyuser->user;

    //         if(!$user->email_verified_at){
    //             $verifyuser->user->email_verified_at=1;
    //             $verifyuser->user->save();
    //             // $last_id =$user->id;

    //             // $token=$last_id.hash('sha256', Str::random(120));

    //             return redirect()->route('login')->with('info','your email succesfully verified')
    //             ->with('verifiedEmail', $user->email);
    //         }else{
    //             return redirect()->route('login')->with('info','your email already verified')
    //             ->with('verifiedEmail', $user->email);

    //         }
    //     }
    // }

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
            // 'pendaftaran_id' => [],
            
        ]);

        // $pendaftaran_id = Helper::IDGenerator(new User, 'pendaftaran_id', 2, 'PDF'); /** Generate id */
        // $data = new User();
        // $data=$request->pendaftaran_id = $pendaftaran_id;
        $data['password']=Hash::make($data['password']);
        
        // $pendaftaran_name = $request->nama;
        $generator= Helper::IDGenerator(new User, 'pendaftaran_id', 2, 'PDF'); /** Generate id */
        $pendaftaran_id = new User;
        $pendaftaran_id->pendaftaran_id =$generator;
        $data['pendaftaran_id']=$generator;


        
        // $pendaftaran_id->nama =$request->get ('nama');
        // $pendaftaran_id->alamat =$request->get ('alamat');
        // $pendaftaran_id->ttl =$request->get ('ttl');
        // $pendaftaran_id->agama =$request->get ('agama');
        // $pendaftaran_id->no_telp =$request->get ('no_telp');
        // $pendaftaran_id->jenis_kelamin =$request->get ('jenis_kelamin');
        // $pendaftaran_id->role_id =$request->get ('role_id');
        // $pendaftaran_id->email =$request->get ('email');
        // $pendaftaran_id->password =$request->get ('password');
        
        // $q->alamat=$alamat;
        // $q->ttl=$ttl;
        // $q->agama=$agama;
        // $q->no_telp=$no_telp;
        // $q->jenis_kelamin=$jenis_kelamin;
        // $q->role_id=$role_id;
        // $q->email=$email;
// dd($data);

        // $pendaftaran_id->save();


        
        
        user::create($data);
       

        return redirect('/users')->with('Berhasil','Berhasil ditambahkan');
    }

    // Edit data users
    public function edit($id)
    {
    $user = DB::table('users')->where('id',$id)->first();
    $roles=Role::all();
    $kelas_tingkatan=KelasTingkatan::all();
    return view ('users.edit' ,['users' =>$user, 'kelas_tingkatan'=>$kelas_tingkatan],['roles' =>$roles]);
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
    return redirect('users');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('users')->where('id',$id)->delete();
    
    // alihkan halaman ke halaman pegawai
    return redirect('users');
    }







    public function createupload()
    {
        $users=User::all();
    return view ('syarat.add',['users' =>$users]);
    }
    
    public function liatupload()
    {
        $users=User::all();
         $users=User::where('role_id',2)->get();
    return view ('syarat.konfirmasi',['users' =>$users]);
    }

    

    public function upload(Request $request)
    {
        

        
        $data= $request->validate([
            
           
            'pas_foto' => ['image','file','max:1024'],
            'foto_kk' =>['image','file','max:1024'],
            // 'status' => ['required','max:255'],
       
        ]);
        // $data['status']=0;
        // $data=null;
        if($request->file('pas_foto')){
            $data['pas_foto']=$request->file('pas_foto')->store('post-images');
        };
        // $data=null;
        if($request->file('foto_kk')){
            $data['foto_kk']=$request->file('foto_kk')->store('post-images');
        }
        
   
        DB::table('users')->where('id',$request->id)->update([
            'pas_foto'=>$request->file('pas_foto')->store('post-images'),
            'foto_kk'=>$request->file('foto_kk')->store('post-images'),
        ]);
       
        // $data['status']=0;
        //  dd($data);
       
        
       
        // dd($data);
        return redirect('/users/syarat')->with('Berhasil','Berhasil Terkirim');
    }
    
    public function show($id)
     {
     $users = DB::table('users')->where('id',$id)->first();
    
     return view ('syarat.show' ,['users' =>$users]);
     }
}