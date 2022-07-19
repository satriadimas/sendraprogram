<!DOCTYPE html>
<html lang="en">
 @include('slice.head')
    
       @include('slice.topbar')
        @include('slice.sidebar')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pelatih</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url ('/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pelatih</li>
                        </ol>
                      
                        <div class="card mb-4">
                            <div class="card-header ">
                                <i class="fas fa-table me-1" ></i>
                                Data Table Pelatih
                            </div>

                      
                                
                            
                                    <form action="{{ url('/kelas/update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row" style=" margin-bottom: 10px;  margin-right: 1px;margin-left: 1px;margin-top: 10px;">
                                            <input type="hidden" name="id" value="{{ $kelas_tingkatan->id }}"> <br/>
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kelas Tingkatan</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="nama_kelas" class="form-control"  value="{{ $kelas_tingkatan->nama_kelas }} " required>
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
                                        <a href="/pelatih" class="btn btn-danger ">
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
