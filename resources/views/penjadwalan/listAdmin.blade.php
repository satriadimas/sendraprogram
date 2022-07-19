<!DOCTYPE html>
<html lang="en">

@include('slice.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     @include('slice.sidebar')


     @if(session()->has('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               
              @include('slice.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid px-4">
                    <h1 class="mt-4">jadwal Tari</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ url ('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Jadwal Tari</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                          Pengaturan jadwal Admin
                        </div>
                    </div>
                 
                    <a href="{{ url ('/jatar/create')}}" class="btn btn-success " style="width:200px; margin-bottom: 20px" >Tambah</a>
                 
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Table Jadwal Tari
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                          <th>Materi Tari</th>
                                          <th>Jam</th>
                                          <th>Hari</th>
                                          <th>Nama pelatih</th>
                                          <th>Kelas Tingkatan</th>
                                        <th >Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        
                                  
                                       
                                        
                                            @foreach($jadwal_tari as $tar)
                                           
                                              
                                          
                                            <tr>
                                            
                                               
                                                <td> {{ $tar->nama_tari}}</td>
                                                <td>{{ $tar->jam }}</td>
                                                <td>{{ $tar->hari }}</td>
                                                <td> {{ $tar->nama_pelatih}} </td>
                                                <td> {{ $tar->nama_kelas}} </td>
                                               
                                                                                       
                                                <td><a href="{{ url ('/jatar/edit',$tar->id)}}" class="btn btn-primary" >Edit</a>
                                                <button type="button" class="btn btn-danger" style="margin-left: 20px" data-bs-toggle="modal" data-bs-target="#hapusModal" onclick="hapusData({{$tar->id}})">
                                                    Hapus
                                                  </button></td>
                                                
                                
                                            </tr>
                                     
                                                @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   



<!-- Button trigger modal -->

  
  <!-- Button trigger modal -->

  
  <!-- HapusModal -->
  <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Yakin Akan menghapus ini
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" onclick="hapusDataAction()">Hapus</button>
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
            window.location.href = "{{ url('/jatar/hapus') }}/"+idHapus;
        }
    </script>

</body>

</html>