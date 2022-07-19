<!DOCTYPE html>
<html lang="en">
    @include('slice.head')
    @include('slice.topbar')
        @include('slice.sidebar')
        <main>
                     <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            @if (auth()->user()->role_id==1|| auth()->user()->role_id==3)
                            <div class="col-xl-3 col-md-6">
                               
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-money-check-dollar" style="margin-right: 10px"></i>Konfirmasi Pembayaran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/pembayaran/konfirmasi') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-user-check" style="margin-right: 10px"></i>Cek Berkas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/users/konfirmasi') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endif


                            @if (auth()->user()->role_id==2)
                            <div class="col-xl-3 col-md-6">
                               
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-money-check-dollar" style="margin-right: 10px"></i>Pembayaran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/pembayaran') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-user-check" style="margin-right: 10px"></i>Syarat Pendaftaran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/users/syarat') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="col-xl-3 col-md-6">
                               
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-user" style="margin-right: 10px"></i>Profile</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/profil/{id}') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @if (auth()->user()->role_id==1|| auth()->user()->role_id==3)
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-user-large" style="margin-right: 10px"></i>Pelatih</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/pelatih') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-user-check" style="margin-right: 10px"></i>Kelas Tingkatan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/kelas') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-address-book" style="margin-right: 10px"></i>Data Peserta</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url ('/users')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-chalkboard-user" style="margin-right: 10px"></i>Data Materi tari</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url ('/matari')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           @endif

                           @if (auth()->user()->role_id==2 && auth()->user()->status_bayar == 1)
                           <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body"><i class="fa-solid fa-calendar-check" style="margin-right: 10px"></i>Pilih Jadwal Tari</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url ('/jatar')}}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        @endif


                           @if (auth()->user()->role_id==1)
                           <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"><i class="fa-solid fa-circle-user" style="margin-right: 10px"></i>Users</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url ('/users')}}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-calendar" style="margin-right: 10px"></i>Penjadwalan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url ('/jatar/create')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        
     @include('slice.footer_script')
    </body>
</html>
