<!DOCTYPE html>
<html lang="en">
 @include('slice.head')
    
       @include('slice.topbar')
        @include('slice.sidebar')
     
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Peserta</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Peserta</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header ">
                                <i class="fas fa-table me-1" ></i>
                                Data Table Peserta
                            </div>

                            
                                
                            
                                    <form action="{{ url('/peserta/store') }}" method="POST">
                                        @csrf

                                        
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="nama" class="form-control" autofocus required value="{{ old('nama') }}">
                                              @error('nama')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="alamat"  class="form-control" autofocus required value="{{ old('alamat') }}">
                                              @error('alamat')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="ttl"  class="form-control" autofocus required value="{{ old('ttl') }}">
                                              @error('ttl')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="agama"  class="form-control"  autofocus required value="{{ old('agama') }}">
                                              @error('agama')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="roles" class="col-sm-2 col-form-label">jenis Kelamin</label>
                                            <div class="col-sm-10">
                                          

                                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"  autofocus required value="{{ old('jenis_kelamin') }}">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                 </select>
                                                 @error('jenis_kelamin')
                                                 <div class="alert alert-danger">
                                                     {{"Form Belum diisi"}}
                                                 </div>
                                                  @enderror
                                            </div>
                                          </div>
                                          <div hidden class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label hidden for="roles" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                            <select hidden class="form-control" id="role_id" name="role_id" autofocus required value="{{ old('role_id') }}">
                                            
                                                    @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->role_nama }}</option>
                                                     @endforeach
                                                 </select>
                                                 @error('role_id')
                                                 <div class="alert alert-danger">
                                                     {{"Form Belum diisi"}}
                                                 </div>
                                                  @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Telepon</label>
                                            <div class="col-sm-10">
                                              <input type="number" name="no_telp" class="form-control"  autofocus required value="{{ old('no_telp') }}">
                                              @error('no_telp')
                                              <div class="alert alert-danger">
                                                  {{"Form Belum diisi"}}
                                              </div>
                                               @enderror
                                            </div>
                                          </div>
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                          <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"  autofocus required value="{{ old('email') }}">
                                            @error('email')
                                            <div class="alert alert-danger">
                                                {{"Email tidak Valid"}}
                                            </div>
                                             @enderror
                                          </div>
                                        </div>
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                          <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                          <div class="col-sm-10">
                                            <input type="password" name="password"class="form-control" id="inputPassword" placeholder="Password" value="" required>
                                            @error('password')
                                            <div class="alert alert-danger">
                                                {{"Password Belum diisi"}}
                                            </div>
                                             @enderror
                                          </div>
                                        </div>
                                    </div>
                                        <div class="my-2"></div>
                                        <button  type="submit" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            
                                            <span class="text">Simpan Data</span>
                                            
                                        </button>
                                        <a href="/peserta" class="btn btn-danger ">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">batal</span>
                                        </a>
                                        
                                      </form>
                                 
                   
           
            <!-- End of Main Content -->
                                    </tbody>
                               
                            </div>
                        </div>
                    </div>
                </main>
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
        @include('slice.footer_script')
    </body>
</html>
