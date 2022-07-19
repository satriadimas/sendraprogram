<!DOCTYPE html>
<html lang="en">
 @include('slice.head')
    
       @include('slice.topbar')
        @include('slice.sidebar')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Peserta</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url ('/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Data Peserta</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header ">
                                <i class="fas fa-table me-1" ></i>
                                Data Table Peserta
                            </div>

                                
                                
                            
                                    <form action="{{ url('/peserta/update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <input type="hidden" name="id" value="{{ $users->id }}"> <br/>
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="nama" class="form-control"  value="{{ $users->nama }} " required>
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="alamat"  class="form-control"  value="{{ $users->alamat }} " required>
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="ttl"  class="form-control"  value="{{ $users->ttl }} " required>
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="agama"  class="form-control"  value="{{ $users->agama }} " required>
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="roles" class="col-sm-2 col-form-label">jenis Kelamin</label>
                                            <div class="col-sm-10">
                                             
                                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ $users->jenis_kelamin }}" required>
                                                  <option value="">-pilih-</option>
                                                    <option  value="Laki-Laki" {{ $users->jenis_kelamin=="Laki-Laki" ?'selected':""}}>Laki-Laki</option>
                                                    <option  value="Perempuan" {{ $users->jenis_kelamin=="Perempuan" ?'selected':""}}>Perempuan</option>
                                                 </select>
                                                 @error('jenis_kelamin')
                                                 <div class="text-danger">{{ $message }}</div>
                                                 @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="roles" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="role_id" name="role_id" required>
                                                    @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"{{ $role->id== $users->role_id? 'selected':'' }}>{{ $role->role_nama }}</option>
                                                 @endforeach
                                                 </select>
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Telepon</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="no_telp" class="form-control"  value="{{ $users->no_telp }}" required>
                                            </div>
                                          </div>
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                          <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control"  value="{{ $users->email }}">
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
