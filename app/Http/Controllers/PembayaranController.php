<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\KelasTingkatan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
use Datetime;
use PDF;

class PembayaranController extends Controller
{
    public function index()
    {
        // $users = DB::table('users')->where('nama', 'alberto')->first();

        // // foreach ($users as $user) {
        // //  echo $user->nama;
        // // }
        // $users=User::where('role_id',2)->get();
        $pembayaran=Pembayaran::all();
        $users=User::all();
        $keting=KelasTingkatan::where('id', Auth::user()->keting_id)->first();
        
        $pembayaran=Pembayaran::where('userid', Auth::user()->id)->first();
        
        return view('pembayaran.pembayaran',['pembayaran' =>$pembayaran], ['users' =>$users, 'keting' => $keting]);
    }

    public function index2()
    {

       
       

        // // foreach ($users as $user) {
        // //  echo $user->nama;
        // // }
        // $pembayaran = Pembayaran::query() ->select('pembayaran.*', 'users.nama')
        // ->join('users', 'pembayaran.userid', '=', 'users.id')
        // ->get();

        $pembayaran = DB::table('pembayaran')
        ->join('users', 'pembayaran.userid','=','users.id')
        ->select('pembayaran.*','users.nama')
        ->get();
        // $pembayaran=Pembayaran::all();
        
        // dd($pembayaran);
        return view('pembayaran.konfirmasi',['pembayaran' =>$pembayaran]);
    }

    public function store(Request $request)
    {
        

        
        $data= $request->validate([
            
            'pendaftaran_id' => ['required','max:255'],
           'userid'=>['required'],
        //    'tanggal'=>['required'],
            'nominal' => ['required','max:255'],
            'bukti_pembayaran' =>['image','file','max:1024'],
            // 'status' => ['required','max:255'],
       
        ]);
        $data['status']=0;
        
        $data['bank']=$request->bank;

        if ($request->lainnya != '') {
            $data['bank']=$request->lainnya;
        }
        // dd($data['bank']);
        if($request->file('bukti_pembayaran')){
            $data['bukti_pembayaran']=$request->file('bukti_pembayaran')->store('post-images');
        }

       
        // $data['status']=0;
        //  dd($data);
        Pembayaran::create($data);
        
       
        // dd($data);
        return redirect('/pembayaran')->with('Berhasil','Pembayaaran Berhasil Terkirim, Harap menunggu konfirmasi');
    }

     // Edit data users
     public function show($id)
     {
     $pembayaran = DB::table('pembayaran')->where('id',$id)->first();
    //  $users=User::where('id_role',2)->get();
     return view ('pembayaran.show' ,['pembayaran' =>$pembayaran]);
     }


      // method untuk hapus data pegawai
    public function hapus( $id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('pembayaran')->where('id',$id)->delete();

    return redirect('/pembayaran/konfirmasi');
}


    public function status($id)
    {
       $data= DB::table('pembayaran')->where('id',$id)->first();
        $user = User::where('id', $data->userid)->first();
       
        $now = new \Datetime();
        $waktu_konfirmasi = $now->format('Y-m-d h:i:s');

        $status_sekarang=$data->status;
        if($status_sekarang ==1){
            DB::table('pembayaran')->where('id',$id)->update([
                'status'=>0,
                'waktu_konfirmasi'=> null
            ]);
            
            $user->status_bayar = 0;
            $user->save();

        }else{
            DB::table('pembayaran')->where('id',$id)->update([
                'status'=>1,
                'waktu_konfirmasi'=> $waktu_konfirmasi
            ]);
            $user->status_bayar = 1;
            $user->save();
        }
        return redirect('/pembayaran/konfirmasi');
    }
    
    public function downloadPDF() {
        $pembayaran = DB::table('pembayaran')->select('pembayaran.*', 'users.nama')
                            ->join('users', 'pembayaran.userid','=','users.id')
                            ->orderBy('pembayaran.status')
                            ->get();

        $pdf = PDF::loadView('pembayaran.pdf', compact('pembayaran'));
        
        return $pdf->download('Data Pembayaran.pdf');
    }   

}