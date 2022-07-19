<!DOCTYPE html>
<html lang="en">
    @include('halaman.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('halaman.nav')
        <!-- Masthead-->
        <header class="masthead" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('assets/img/portfolio/arinbijas.jpeg')}}'); 
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center;">
            <div class="container">
                <div class="masthead-subheading" ></div>
                <div class="masthead-heading text-uppercase"></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ url ('/login')}}"><i class="fa-solid fa-right-to-bracket" style="margin-right: 10px"></i>Login</a>
            </div>
        </header>
        

        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tarian</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        
                            <img class="img-fluid" src="assets/img/portfolio/kandagan.jpeg" > 
                      
                        <h4 class="my-3">Tari Kandagan</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                       
                            <img class="img-fluid" src="assets/img/portfolio/kijang.jpeg" > 
                       
                        <h4 class="my-3">Tari Kijang (rumpun fauna)</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        
                            <img class="img-fluid" src="assets/img/portfolio/topeng.jpeg" > 
                      
                        <h4 class="my-3">Tari Topeng</h4>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Acara</h2>
                    <h3 class="section-subheading text-muted">Dokumentasi Acara</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/PAYUNG.jpeg" >
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Payung</div>
                                <div class="portfolio-caption-subheading text-muted">Gambar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/BAKSA.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tari Baksa</div>
                                <div class="portfolio-caption-subheading text-muted">Gambar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/LENGSER.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lengser</div>
                                <div class="portfolio-caption-subheading text-muted">Gambar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                      
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
       
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">Perkenalan singkat tentang kami</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
          
                        
                       
                            
                            <div class="container">
                                <div class="text-center">
                                    <img class="img-fluid" src="{{ asset("assets/img/sakatalogo.png")}}" alt="..." style="padding-bottom: 20px"/>
                            
                                    <h3 class="section-subheading text-muted">LKP Sakata adalah lembaga khursus yang bergerak dibidang pendidikan kesenian yang sudah didirikan pada tanggal 30 agustus 2002 namun baru mendapatkan legalitas diakui oleh pemerintah pada tahun 2006. lembaga tersebut terdapat beberapa kesenian yaitu tari tradisional,tari klasik, karawitan dan lain-lain.</h3>
                                </div>
                        
                        </div>
                    </div>
                  
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/sanggarsakata?igshid=YmMyMTA2M2Y=" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
               
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Payung</h2>
                                    <p class="item-intro text-muted">Upacara Adat Sunda</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/PAYUNG.jpeg" alt="..." />
                                    <p>Payung dalam prosesi pernikahan adat Sunda Jawa Barat, digunakan untuk memayungi pengantin pria saat hendak bertemu pengantin perempuannya. Kemudian digunakan lagi dalam perarakan menuju pelaminan</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tari BAKSA</h2>
                                    <p class="item-intro text-muted">Upacara Adat Sunda</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/BAKSA.jpeg" alt="..." />
                                    <p>Tari Baksa biasanya digunkan untuk mapag pengantin yang dimana mapag berarti menjemput atau menyambut dan panganten berarti pengantin</p>
                                  
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Lengser</h2>
                                    <p class="item-intro text-muted">Upacara Adat Sunda</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/LENGSER.jpeg" alt="..." />
                                    <p>Lengser ini nantinya akan berperan sebagai penyambut utama plus menjadi sosok yang mengantarkan pengantin ke pelaminan</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
      
        @include('halaman.footer_script')
    </body>
</html>
