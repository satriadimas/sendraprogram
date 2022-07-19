<!DOCTYPE html>
<html lang="en">

@include('slice.head')





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
                    <h1 class="mt-4">Data Pelatih</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ url ('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Pelatih</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            Data Pelatih pada LKP SAKATA
                        </div>
                    </div>
                    <a href="{{ url ('/pelatih/create')}}" class="btn btn-success " style="width:200px; margin-bottom: 20px" >Tambah</a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Table Pelatih
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>Nama Pelatih</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th >Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        
                                  
                                       
                                        
                                            @foreach($pelatih as $pel)
                                           
                                              
                                          
                                            <tr>
                                            
                                                <td> {{ $pel->nama_pelatih}}</td>
                                                <td> {{ $pel->alamat}} </td>
                                                <td> {{ $pel->no_telp}} </td>
                                             
                                                
                                                <td><a href="{{ url ('/pelatih/edit',$pel->id)}}" class="btn btn-primary" >Edit</a>
                                                <button type="button" class="btn btn-danger" style="margin-left: 20px" data-bs-toggle="modal" data-bs-target="#hapusModal" onclick="hapusData({{$pel->id}})">
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
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



<!-- Button trigger modal -->

  
  <!-- Button trigger modal -->

  
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
            window.location.href = "{{ url('/pelatih/hapus') }}/"+idHapus;
        }
    </script>

</body>

</html>