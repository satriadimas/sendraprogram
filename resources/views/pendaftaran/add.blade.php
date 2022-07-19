<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="{{ asset("assets/img/sakatalogo.png")}}" />
        <title>Register LKP SAKATA</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center" style="padding-bottom:20px">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">

                                      <form action="{{ url('/pendaftaran/store')}}" method="POST">
                                        @csrf
                                        
                                        <div class="form-floating mb-3">
                                          <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}"/>
                                          <label for="inputEmail">Email address</label>
                                          @error('email')
                                          <div class="alert alert-danger">
                                              {{$message}}
                                          </div>
                                           @enderror
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter your Password" autofocus required/>
                                        <label for="password">Password</label>
                                        @error('password')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                         @enderror
                                    </div>
                                            <h3 class="text-center font-weight-light my-4">Data Diri</h3>
                                            <div class="form-floating mb-3">
                                              <input class="form-control" id="nama" type="nama" name="nama"  placeholder="Enter your name" autofocus required value="{{ old('nama') }}"/>
                                              <label for="inputnama">Nama Lengkap</label>
                                              @error('nama')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                          </div>
                                            <div class="form-floating mb-3">
                                              <input class="form-control" id="nisn" type="text" name="nisn"  placeholder="Enter your name" autofocus required value="{{ old('nama') }}"/>
                                              <label for="inputnama">NISN</label>
                                          </div>
                                            <div class="row mb-3">
                                              <div class="col-md-6">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                      <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Enter your alamat" autofocus required value="{{ old('alamat') }}"/>
                                                      <label for="alamat">Alamat</label>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                      <input class="form-control" id="kota" name="kota" type="text" placeholder="Enter your alamat" autofocus required value="{{ old('alamat') }}"/>
                                                      <label for="alamat">Kota</label>
                                                  </div>
                                              </div>
                                           </div>
                                           <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="ttl" name="ttl" type="text" placeholder="Enter your Tempat tanggal lahir" autofocus required value="{{ old('alamat') }}"/>
                                                    <label for="alamat">Tempat Lahir</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="lahir" name="tgl_lahir" type="date" placeholder="Enter your alamat" autofocus required/>
                                                    <label for="alamat">Tanggal Lahir</label>
                                                </div>
                                            </div>
                                         </div>
                                          <div class="form-group" style="padding-bottom: 10px">
                                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" style=" padding-left:10px;color:black" autofocus required value="{{ old('jenis_kelamin') }}" >
                                              <option value="" >Jenis Kelamin</option>
                                              <option  value="Laki-Laki" >Laki-Laki</option>
                                              <option  value="Perempuan">Perempuan</option>
                                           </select>
                                        </div>
                                            {{-- <div class="form-group" style="padding-bottom: 10px">
                                              <select hidden  class="form-select" id="role_id" name="role_id" style=" padding-left:10px;color:black" autofocus required value="{{ old('role_id') }}" >
                                                
                                                @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->role_nama }}</option>
                                                 @endforeach
                                             
                                             </select>
                                            </div> --}}
                                            <div class="row mb-3">
                                              <div class="col-md-6">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                      <input class="form-control" id="agama" name="agama" type="text" placeholder="Enter your Agama" autofocus required value="{{ old('agama') }}" />
                                                      <label for="alamat">Agama</label>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-floating">
                                                      <input class="form-control" id="no_telp" name="no_telp" type="text" placeholder="Enter your number" autofocus required value="{{ old('no_telp') }}"/>
                                                      <label for="inputLastName">No Telepon</label>
                                                      @error('no_telp')
                                                      <div class="alert alert-danger">
                                                          {{"Form Belum diisi"}}
                                                      </div>
                                                       @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-floating mb-3">
                                            <input class="form-control" id="status_pendidikan" type="text" name="status_pendidikan"  placeholder="Enter your name" autofocus required value="{{ old('nama') }}"/>
                                            <label for="inputnama">Status Pendidikan (Sekarang)</label>
                                            @error('status_pendidikan')
                                            <div class="alert alert-danger">
                                                {{"Form Belum diisi"}}
                                            </div>
                                             @enderror
                                        </div>
                                        <div class="form-group" style="padding-bottom: 10px">
                                            
                                            <select   class="form-select" id="keting_id" name="keting_id" style=" padding-left:10px;color:black" autofocus required value="{{ old('role_id') }}" >
                                                <option value="">Kelas Tingkatan</option>
                                              @foreach ($kelas_tingkatan as $kel)
                                              
                                              <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
                                               @endforeach
                                           
                                           </select>
                                          </div>
                                        
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-dark btn-block" type="submit">Continue</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ url ('/login')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
