<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\jatar;
use App\Models\Pelatih;

use App\Models\JadwalTari;
use App\Models\KelasTingkatan;
use App\Models\MateriTari;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Auth;

class JatarController extends Controller
{
    public function index()
    {
        // $users = User::query()
        // ->with('role')
        // ->get();

        // $roles = role::all();
        // ->where('email','LIKE', '%bebeto%')


//  $users = DB::table('users')
//  ->join('roles', 'users.id_role','=','roles.id')
//  ->get();

    $jadwal_tari = JadwalTari::query()->select('jadwal_tari.*','pelatih.nama_pelatih' ,'materi_tari.nama_tari','kelas_tingkatan.nama_kelas')
    ->join('pelatih', 'jadwal_tari.pelatihid','=','pelatih.id')
    ->join('materi_tari', 'jadwal_tari.matari_id','=','materi_tari.id')
    ->join('kelas_tingkatan', 'jadwal_tari.kelasid','=','kelas_tingkatan.id')
    ->where('kelas_tingkatan.id', Auth::user()->keting_id)
    ->get();

        // dd(Auth::user()->keting_id);

// dd($users);
        
        return view ('jatar.list',['jadwal_tari' =>$jadwal_tari]);
    }

    public function indexUser() {
        $jadwal_tari = DB::table('jadwal_tari_user')->select('jadwal_tari.*','pelatih.nama_pelatih' ,'materi_tari.nama_tari','kelas_tingkatan.nama_kelas')
        ->join('jadwal_tari', 'jadwal_tari_user.jadwal_tari_id','=','jadwal_tari.id')
        ->join('pelatih', 'jadwal_tari.pelatihid','=','pelatih.id')
        ->join('materi_tari', 'jadwal_tari.matari_id','=','materi_tari.id')
        ->join('kelas_tingkatan', 'jadwal_tari.kelasid','=','kelas_tingkatan.id')
        ->where('kelas_tingkatan.id', Auth::user()->keting_id)
        ->where('jadwal_tari_user.user_id', Auth::user()->id)
        ->get();
        
        return view ('jatar.listUser',['jadwal_tari' =>$jadwal_tari]);
    }


        public function create()
        {
            $pelatih=Pelatih::all();
            $materi_tari=MateriTari::all();
            $jadwal_tari=JadwalTari::all();
            $kelas_tingkatan=KelasTingkatan::all();

        return view ('jatar.add',['jadwal_tari' =>$jadwal_tari,'pelatih' =>$pelatih,'kelas_tingkatan'=>$kelas_tingkatan, 'materi_tari'=>$materi_tari]);
        }




        // tambah data mapel
        public function store(Request $request)
        {
            $data = $request->validate([
                'pelatihid'=>['required'],
                'matari_id'=>['required'],
                'kelasid'=>['required'],
                'hari'=>['required'],
                'jam'=>['required'],
               
            ]);
            // $data=[
            //     'nama'=>$request->nama,
            //     'alamat'=>$request->alamat,
            //     'id_role'=>$request->id_role,
            //     'username'=>$request->username,
            //     'email'=>$request->email,
            //     'password'=>Hash::make($request->password),
            // ];
            // DB::table('users')
            // ->insert($data);
            // dd($data);
            JadwalTari::create($data);
            return redirect('/penjadwalan');
        }

        //Edit data users
        public function edit($id)
        {
        $jadwal_tari = DB::table('jadwal_tari')->where('id',$id)->first();
        $pelatih=Pelatih::all();
        $materi_tari=MateriTari::all();
        $kelas_tingkatan=KelasTingkatan::all();
       
// dd($jadwal_pelajaran);
	    return view ('jatar.edit' ,['jadwal_tari' =>$jadwal_tari,'kelas_tingkatan' =>$kelas_tingkatan,'pelatih' =>$pelatih, 'materi_tari'=>$materi_tari]);
        }


        
        
        
        // update data users
        public function update(Request $request)
         {
	   
            JadwalTari::where('id',$request->id)->update([
            'pelatihid'=>$request->pelatihid,
            'matari_id'=>$request->matari_id,
            'hari'=>$request->hari,
            'jam'=>$request->jam,
            'kelasid'=>$request->kelasid,

		
	    ]);
	    // alihkan halaman ke halaman users
	    return redirect('/jatar');
        }


        // method untuk hapus data user
        public function hapus($id)
        {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('jadwal_tari')->where('id',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('/penjadwalan');
        }

        public function submitJadwal(Request $request) {
            $user_id = Auth::user()->id;
            $data = $request->sending;
            for($i = 0; $i < count($data); $i++) {
                $table = DB::table('jadwal_tari_user')->insert([
                    'user_id' => $user_id,
                    'jadwal_tari_id' => $data[$i]
                ]);
            }

            User::where('id', $user_id)->update([
                'status_pilih_jadwal' => 1
            ]);

            return true;
        }
}