<!DOCTYPE html>
@include('slice.head')
 @include('slice.topbar')
        @include('slice.sidebar')
<html lang="en">
 
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>

                    
                    
                    <div class="container" style="padding-top: 50px">
                        <div class="card mb-4 " >
                           
                        <div class="row left-content-center">
                            <form action="{{ url('/profil/upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}"> <br/>
                          <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="{{asset('storage/post-images/'. auth()->user()->images)}}" style="width: 100px; height:100px" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG </div>
                            <!-- Profile picture upload button-->
                            <div class="input-group mb-3" style="width: 50%; margin:auto">
                                <input type="file" name="images" class="form-control" id="images">
                                <button class="btn btn-success" style="background: #202221" for="inputGroupFile02" type="submit">Upload </button>
                              </div>
                        </div>
                            </form>

                        <div class="card-body" style="margin: 20px">
                            
                      
                            <form action="{{ url('/profil/update') }}" method="POST">
                                @csrf
                              <!-- Form Group (username)-->
                              <input type="hidden" name="id" value="{{ auth()->user()->id }}"> <br/>
                              <div class="mb-3">
                                  <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                  <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}">
                              </div>
                              <div class="mb-3">
                                  <label class="small mb-1" for="inputUsername">Password</label>
                                  <input class="form-control" id="password" type="password" name="password" placeholder="Password" value="">
                              </div>
                              <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Nama</label>
                                <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama" value="{{ auth()->user()->nama }}">
                            </div>
                              <!-- Form Row-->
                              <div class="row gx-3 mb-3">
                                  <!-- Form Group (first name)-->
                                  <div class="col-md-6">
                                      <label class="small mb-1" for="inputFirstName">Alamat</label>
                                      <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat" value="{{ auth()->user()->alamat }}">
                                  </div>
                                  <!-- Form Group (last name)-->
                                  <div class="col-md-6">
                                      <label class="small mb-1" for="inputLastName">Agama</label>
                                      <input class="form-control" id="agama" type="text" name="agama" placeholder="Agama" value="{{ auth()->user()->agama}}">
                                  </div>
                              </div>
                              <!-- Form Row        -->
                              <div class="row gx-3 mb-3">
                                  <!-- Form Group (organization name)-->
                                  <div class="col-md-6">
                                      <label class="small mb-1" for="username">Jenis Kelamin</label>
                                      <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ auth()->user()->jenis_kelamin }}" required>
                                        <option  value="Laki-Laki" {{ auth()->user()->jenis_kelamin=="Laki-Laki" ?'selected':""}}>Laki-Laki</option>
                                        <option  value="Perempuan" {{ auth()->user()->jenis_kelamin=="Perempuan" ?'selected':""}}>Perempuan</option>
                                       </select>
                                  </div>
                                  
                                  <div class="col-md-6" >
                                    {{-- <fieldset disabled> --}}
                                      <label class="small mb-1" for="role_id"   >Role</label>
                                      <select class="form-select" id="role_id" name="role_id" disabled required>
                                          @foreach ($roles as $role)
                                                     <option value="{{ $role->id }}"{{ $role->id== auth()->user()->role_id? 'selected':'' }}>{{ $role->role_nama }}</option>
                                          @endforeach
                                        </select>
                                  </div>
                                  </fieldset>
                                  <!-- Form Group (location)-->
                                  
                              </div>
                              <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                @if (auth()->user()->role_id==2)
                                <div class="col-md-6" >
                                    {{-- <fieldset disabled> --}}
                                      <label class="small mb-1" for="keting_id"   >Kelas Tingkatan</label>
                                      <select class="form-select" id="keting_id" name="keting_id" disabled required>
                                          @foreach ($kelas_tingkatan as $kel)
                                                     <option value="{{ $kel->id }}"{{ $kel->id== auth()->user()->keting_id? 'selected':'' }}>{{ $kel->nama_kelas }}</option>
                                          @endforeach
                                        </select>
                                  </div>
                                  @endif
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">NISN</label>
                                    <input class="form-control" id="nisn" type="number" name="nisn" placeholder="NISN" value="{{ auth()->user()->nisn}}">
                                </div>
                            </div>
                              <!-- Form Row-->
                              <div class="row gx-3 mb-3">
                                  <!-- Form Group (phone number)-->
                                  <div class="col-md-6">
                                      <label class="small mb-1" for="inputPhone">No Telpon</label>
                                      <input class="form-control" id="no_telp" type="number" name="no_telp" placeholder="No Telpon" value="{{auth()->user()->no_telp }}">
                                  </div>
                                  <!-- Form Group (birthday)-->
                                  <div class="col-md-6">
                                      <label class="small mb-1" for="inputBirthday">Tempat Tanggal Lahir</label>
                                      <input class="form-control" id="ttl" type="text" name="ttl" placeholder="Tempat Tanggal Lahir" value="{{ auth()->user()->ttl}}">
                                  </div>
                              </div>
                              <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">kota</label>
                                <input class="form-control" id="kota" type="text" name="kota" placeholder="Kota" value="{{ auth()->user()->kota }}">
                            </div>
                            {{-- <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">kelas tingkatan</label>
                                <input class="form-control" id="keting_id" type="text" name="keting_id" placeholder="Kelas" value="{{ auth()->user()->keting_id }}">
                            </div> --}}
                              
                            
                

                           
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Status Pendidikan Sekarang</label>
                                <input class="form-control" id="status_pendidikan" type="text" name="status_pendidikan" placeholder="status Pendidikan" value="{{ auth()->user()->status_pendidikan }}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Nama Ayah/Ibu</label>
                                <input class="form-control" id="ortu" type="text" name="ortu" placeholder="Ayah/Ibu" value="{{ auth()->user()->ortu }}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Tempat Tanggal Lahir Orang Tua</label>
                                <input class="form-control" id="ttlo" type="text" name="ttlo" placeholder="status Pendidikan" value="{{ auth()->user()->ttlo }}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Pendidikan Orang Tua</label>
                                <input class="form-control" id="pendidikan" type="text" name="pendidikan" placeholder="Pendidikan" value="{{ auth()->user()->pendidikan }}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Pekerjaan</label>
                                <input class="form-control" id="pekerjaan" type="text" name="pekerjaan" placeholder="Pekerjaan" value="{{ auth()->user()->pekerjaan }}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Alamat OrangTua</label>
                                <input class="form-control" id="alamat_ortu" type="text" name="alamat_ortu" placeholder="Alamat Orang Tua" value="{{ auth()->user()->alamat_ortu }}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Nomor Telp/HP</label>
                                <input class="form-control" id="notelp_ortu" type="number" name="notelp_ortu" placeholder="Nomer Telpon" value="{{ auth()->user()->no_telp }}">
                            </div>



                            {{-- @if (auth()->user()->role_id==1) --}}

                              <!-- Save changes button-->
                              <button class="btn btn-primary" type="submit">Save changes</button>
                          {{-- @endif --}}
                            </form>      
                       

          </div>
                                
                                
        <script src="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js")}}" crossorigin="anonymous"></script>
        <script src="{{ asset("js/scripts.js")}}"></script>
    </body>
</html>
