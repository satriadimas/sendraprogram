<!DOCTYPE html>
<html lang="en">
 @include('slice.head')
    
       @include('slice.topbar')
        @include('slice.sidebar')
        
        @if(session()->has('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Users</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                               Data Users
                            </div>
                        </div>
                        <a href="{{ url ('/users/create')}}" class="btn btn-success " style="width:200px; margin-bottom: 20px" >Tambah</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table Peserta
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                 

                                    @foreach($users as $user)
                                    <tr>
                                    
                                        <td> {{ $user->nama}}</td>
                                        <td> {{ $user->alamat}} </td>
                                        <td> {{ $user->no_telp}} </td>
                                        <td> {{ $user->jenis_kelamin}} </td>
                                        <td> {{ $user->role_nama}}</td>
                                        <td> {{ $user->email}} </td>
                                        <td><a href="{{ url ('/users/edit',$user->id)}}" class="btn btn-primary" >Edit</button></td>
                                            {{-- <td><button type="button" class="btn btn-danger" style="margin-left: 20px"  data-bs-toggle="modal" data-bs-target="#hapusModal" onclick="hapusData({{$user->id}})" >Hapus</button></td> --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
           

       <!-- HapusModal -->
  <<div class="modal" id="hapusModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Yakin Hapus data ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger"  onclick="hapusDataAction()">Hapus</button>
        </div>
      </div>
    </div>
  </div>

        @include('slice.footer_script')

        <script>
            var idHapus=0;
            function hapusData(id){
                idHapus=id;
            }
            function hapusDataAction(){
                window.location.href = "{{ url('/users/hapus') }}/"+idHapus;
            }
        </script>

    </body>
</html>
