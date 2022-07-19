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
        <link href="{{ asset("css/styles.css")}}" rel="stylesheet" />
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Identitas Orang Tua</h3></div>
                                    <div class="card-body">

                                      <form action="{{ url('/pendaftaran/store2')}}" method="POST">
                                        @csrf
                                        
                                        <input type="hidden" name="id" value="{{ $id }}"> <br/>
                                        <div class="form-floating mb-3">
                                          <input class="form-control" id="ortu" type="text" name="ortu" placeholder="name@example.com" autofocus required value="{{ old('ortu') }}"/>
                                          <label for="ortu">Nama Ayah/Ibu</label>
                                          @error('ortu')
                                          <div class="alert alert-danger">
                                              {{$message}}
                                          </div>
                                           @enderror
                                      </div>
                            
                                            <div class="form-floating mb-3">
                                              <input class="form-control" id="ttlo" type="text" name="ttlo"  placeholder="Enter your Temoat tanggal lahir" autofocus required value="{{ old('nama') }}"/>
                                              <label for="inputnama">Tempat Lahir Orang Tua</label>
                                              @error('ttlp')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                          </div>
                            
                                            <div class="form-floating mb-3">
                                              <input class="form-control" id="tgl_lahir_ortu" type="date" name="tgl_lahir_ortu"  placeholder="Enter your Temoat tanggal lahir" autofocus required value="{{ old('nama') }}"/>
                                              <label for="inputnama">Tanggal Lahir Orang Tua</label>
                                              @error('tgl_lahir_ortu')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                          </div>
                                           
                                          <div class="form-floating mb-3">
                                            <input class="form-control" id="pendidikan" type="text" name="pendidikan"  placeholder="Enter your pendidikan" autofocus required value="{{ old('nama') }}"/>
                                            <label for="inputnama">Pendidikan</label>
                                            @error('pendidikan')
                                            <div class="alert alert-danger">
                                                {{"Form Belum diisi"}}
                                            </div>
                                             @enderror
                                        </div>
                                            
                                           
                                          <div class="form-floating mb-3">
                                            <input class="form-control" id="pekerjaan" type="text" name="pekerjaan"  placeholder="Enter your name" autofocus required value="{{ old('nama') }}"/>
                                            <label for="inputnama">Pekerjaan</label>
                                            @error('pekerjaan')
                                            <div class="alert alert-danger">
                                                {{"Form Belum diisi"}}
                                            </div>
                                             @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="alamat_ortu" type="text" name="alamat_ortu"  placeholder="Enter your name" autofocus required value="{{ old('nama') }}"/>
                                            <label for="inputnama">Alamat Orang Tua</label>
                                            @error('alamat_ortu')
                                            <div class="alert alert-danger">
                                                {{"Form Belum diisi"}}
                                            </div>
                                             @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="telp_ortu" type="text" name="telp_ortu"  placeholder="Enter your name" autofocus required value="{{ old('nama') }}"/>
                                            <label for="inputnama">No Telp/Hp Orang Tua</label>
                                            @error('telp_ortu')
                                            <div class="alert alert-danger">
                                                {{"Form Belum diisi"}}
                                            </div>
                                             @enderror
                                        </div>
                                      
                                        
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-dark btn-block" type="submit">Create Account</button></div>
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
