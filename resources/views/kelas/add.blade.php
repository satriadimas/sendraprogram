<!DOCTYPE html>
<html lang="en">
 @include('slice.head')
    
       @include('slice.topbar')
        @include('slice.sidebar')
     
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kelas Tingkatan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url ('/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kelas Tingkatan</li>
                        </ol>
                     
                        <div class="card mb-4">
                            <div class="card-header ">
                                <i class="fas fa-table me-1" ></i>
                                Data Table Kelas Tingkatan
                            </div>

                            
                                
                            
                                    <form action="{{ url('/kelas/store') }}" method="POST">
                                        @csrf

                                        
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pelatih</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="nama_kelas" class="form-control"  value=" ">
                                            </div>
                                          </div>
                                          
                                          
                                          <div  class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <label  for="roles" class="col-sm-2 col-form-label">Kelas</label>
                                            <div class="col-sm-10">
                                            <select  class="form-select" id="kelasid" name="kelasid" autofocus required value="{{ old('role_id') }}">
                                            
                                                    @foreach ($kelas_tingkatan as $kel)
                                                    <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
                                                     @endforeach
                                                 </select>
                                                 @error('kelasid')
                                                 <div class="alert alert-danger">
                                                     {{"Form Belum diisi"}}
                                                 </div>
                                                  @enderror
                                            </div>
                                          </div>
                                        <div class="my-2"></div>
                                        <button  type="submit" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            
                                            <span class="text">Simpan Data</span>
                                            
                                        </button>
                                        <a href="/kelas" class="btn btn-danger ">
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
                            <div class="text-muted">Copyright &copy; Sakata</div>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('slice.footer_script')
    </body>
</html>
