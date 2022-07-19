<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Interfaces</div>
                   
                    <a class="nav-link" href="{{ url ('/dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    
                    <a class="nav-link" href="{{ url ('/profil/{id}')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        Profil
                    </a>
                    @if (auth()->user()->role_id==2)

                    <a class="nav-link" href="{{ url ('/users/syarat')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-check"></i></div>
                      Syarat Pendaftaran
                    </a>
                    <a class="nav-link" href="{{ url ('/pembayaran')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                       Pembayaran
                    </a>
                    <a class="nav-link" href="{{ url ('/home')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                       Pembayaran SPP
                    </a>
                    <a class="nav-link" href="{{ url ('/home')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                       History Pembayaran SPP
                    </a>
                  
                    @endif
                    @if (auth()->user()->role_id==2 && auth()->user()->status_bayar=='1' && auth()->user()->status_pilih_jadwal!='1')
                    <a class="nav-link" href="{{ url ('/jatar')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    Pilih Jadwal tari
                    
                    </a>
                    @endif
                    @if (auth()->user()->role_id==2 && auth()->user()->status_bayar=='1' && auth()->user()->status_pilih_jadwal=='1')
                    <a class="nav-link" href="{{ url ('/jatar-user')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    Jadwal tari
                    
                    </a>
                    @endif
                    
                    
                    @if (auth()->user()->role_id==1 || auth()->user()->role_id==3)
                    <a class="nav-link" href="{{ url ('/users/konfirmasi')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-check"></i></div>
                      Cek Berkas
                    </a>
                    <a class="nav-link" href="{{ url ('/pembayaran/konfirmasi')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                      Konfirmasi Pembayaran
                    </a>
                    <a class="nav-link" href="{{ url ('/home')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                      Konfirmasi Pembayaran SPP
                    </a>
                    
                   
                    <div class="sb-sidenav-menu-heading">Data</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Data Master
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ url ('/users')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-user"></i></div>
                              Users
                            </a>
                            <a class="nav-link" href="{{ url ('/peserta')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                              Peserta
                            </a>
                           <a class="nav-link" href="{{ url ('/matari')}}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                          Materi Tari
                        </a>
                            <a class="nav-link" href="{{ url ('/pelatih')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-large"></i></div>
                              Pelatih
                            </a>
                            <a class="nav-link" href="{{ url ('/kelas')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-elevator"></i></div>
                              Data Kelas Tingkatan
                            </a>
                            @endif
                            @if(auth()->user()->role_id==1)
                            <a class="nav-link" href="{{ url ('/penjadwalan')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                             Penjadwalan
                        </a>
                        </nav>
                    </div>
                   @endif
{{-- 
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     Laporan
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                   --}}
                  
                    
                </div>
            </div>
           
        </nav>
    </div>
    <div id="layoutSidenav_content">
        
