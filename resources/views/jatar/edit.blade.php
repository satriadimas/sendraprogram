<!DOCTYPE html>
<html lang="en">
 @include('slice.head')
    
       @include('slice.topbar')
        @include('slice.sidebar')
     
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jadwal Tari</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url ('/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Jadwal Tari</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header ">
                                <i class="fas fa-table me-1" ></i>
                                Data Table jadwal Tari
                            </div>

                            
                                
                            
                                    <form action="{{ url('/jatar/update') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $jadwal_tari->id }}"> <br/>
                                        <div  class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="roles" class="col-sm-2 col-form-label">Pelatih Tari</label>
                                            <div class="col-sm-10">
                                            <select class="form-select" id="pelatihid" name="pelatihid" autofocus required value="{{ old('pelatihid') }}">
                                            
                                                    @foreach ($pelatih as $pel)
                                                    <option value="{{ $pel->id }}"{{ $pel->id== $jadwal_tari->pelatihid? 'selected':'' }}>{{ $pel->nama_pelatih }}</option>
                                                     @endforeach
                                                 </select>
                                                 @error('pelatihid')
                                                 <div class="alert alert-danger">
                                                     {{"Form Belum diisi"}}
                                                 </div>
                                                  @enderror
                                            </div>
                                          </div>

                                          <div  class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label  for="roles" class="col-sm-2 col-form-label">materi tari</label>
                                            <div class="col-sm-10">
                                            <select  class="form-select" id="matari_id" name="matari_id" autofocus required value="{{ old('matari_id') }}">
                                            
                                                    @foreach ($materi_tari as $mat)
                                                    <option value="{{ $mat->id }}"{{ $mat->id== $jadwal_tari->matari_id? 'selected':'' }}>{{ $mat->nama_tari }}</option>
                                                     @endforeach
                                                 </select>
                                                 @error('matari_id')
                                                 <div class="alert alert-danger">
                                                     {{"Form Belum diisi"}}
                                                 </div>
                                                  @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Hari</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="hari"  class="form-control"  value="{{ $jadwal_tari->hari }}" >
                                            </div>
                                          </div>
                                          <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Jam</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="jam"  class="form-control"  value="{{ $jadwal_tari->jam }}">
                                            </div>
                                          </div>

                                          <div  class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label  for="roles" class="col-sm-2 col-form-label">materi tari</label>
                                            <div class="col-sm-10">
                                            <select  class="form-select" id="kelasid" name="kelasid" autofocus required value="{{ old('kelas_id') }}">
                                            
                                                    @foreach ($kelas_tingkatan as $kel)
                                                    <option value="{{ $kel->id }}"{{ $kel->id== $jadwal_tari->kelasid? 'selected':'' }}>{{ $kel->nama_kelas }}</option>
                                                     @endforeach
                                                 </select>
                                                 @error('kelasid')
                                                 <div class="alert alert-danger">
                                                     {{"Form Belum diisi"}}
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
                                        <a href="/jatar-user" class="btn btn-danger ">
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
