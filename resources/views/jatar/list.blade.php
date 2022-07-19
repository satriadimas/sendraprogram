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
                    @if (auth()->user()->role_id==2 && auth()->user()->status_pilih_jadwal!='1')
                    <div class="card mb-4">
                        <div class="card-body">
                          Pilihlah Jadwal Latihan sesuai Kelas tingkatan yang dipilih
                        </div>
                    </div>
                    @endif
                    @if (auth()->user()->role_id==3)
                    <a href="{{ url ('/jatar/create')}}" class="btn btn-success " style="width:200px; margin-bottom: 20px" >Tambah</a>
                   @endif
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
                                               
                                                {{-- @if (auth()->user()->role_id==3)                                          
                                                <td><a href="{{ url ('/jatar/edit',$tar->id)}}" class="btn btn-primary" >Edit</a>
                                                {{-- <button type="button" class="btn btn-danger" style="margin-left: 20px" data-bs-toggle="modal" data-bs-target="#hapusModal" onclick="hapusData({{$tar->id}})">
                                                    Hapus
                                                  </button></td> --}}
                                                  {{-- @endif --}} 
                                                  @if (auth()->user()->role_id==2 && auth()->user()->status_pilih_jadwal!='1')
                                                  <td><div class="form-check">
                                                    <input class="form-check-input" data-id="{{$tar->id}}" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                     Pilih Kelas 
                                                    </label>
                                                  </div>
                                                  </td>
                                                  @endif
                                            </tr>
                                     
                                                @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                                @if (auth()->user()->role_id==2 && auth()->user()->status_bayar=='1')
                                  @if(auth()->user()->status_pilih_jadwal=='1' )
                                  <label for="" style="color: green;">Anda sudah memilih jadwal Tari</label>
                                  @else
                                  <label for="" style="color: red;">Anda belum memilih jadwal Tari</label>
                                  @endif
                                  @if(auth()->user()->status_pilih_jadwal!='1')
                                  <button class="btn btn-primary" style="float: right;" id="pilih">Pilih Jadwal Tari</button>
                                  @endif
                                @endif
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

    <script>
      $('#pilih').on('click', function () {
          // console.log('test')
          var checkbox = $('input[id="flexCheckDefault"]')
          var data = []
          var j = 0
          for(let i = 0; i < checkbox.length; i++) {
            if ($(checkbox[i]).prop('checked') == true) {
              data[j] = $(checkbox[i]).attr('data-id')
              j++
            }
          }
          console.log(data)
          if(data.length > 3) {
            alert('anda tidak bisa memilih lebih dari 3 Jadwal!')
          } else {
            var url = "{{ url('/') }}/jatar/submit-jadwal"
            var data_to_send = 
            $.ajax({
              url: url,
              data:{
                _token: "{{ csrf_token() }}",
                sending: data
              },
              method:'post'
            }).done(function(res){
              alert('anda telah berhasil memilih kelas')
              window.location.replace("{{ url('/') }}/jatar");
            }).fail(function(err){

            })
          }
      })
    </script>

</body>

</html>