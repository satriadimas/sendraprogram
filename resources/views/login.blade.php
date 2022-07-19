<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="{{ asset("assets/img/sakatalogo.png")}}" />
        <title>Login LKP SAKATA</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <img src="{{ asset("assets/img/sakatalogo.png")}}" style="width:90px;height:90px;margin-left:160px;margin-top:40px">
                                        <h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                      @if(session()->has('Berhasil'))
                                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          {{ session('Berhasil') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif

                                      @if(session()->has('Silahkan'))
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{ session('Silahkan') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif

                                      @if(session()->has('Berhasil1'))
                                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          {{ session('Berhasil1') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif

                                      @if(session()->has('WrongPass'))
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{ session('WrongPass') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif

                                      @if(session()->has('Failed'))
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{ session('Failed') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif

                                      @if(session()->has('NotValid'))
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{ session('NotValid') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif
                      
                                      @if(session()->has('loginError'))
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{ session('loginError') }}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                      @endif
                                      <form action="{{ url('/') }}/login" method="POST"class="user">
                                          @csrf
                                          
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}"/>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword"  name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            {{-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> --}}
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ url ('/')}}">kembali</a>
                                                <button class="btn btn-success" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ url ('/pendaftaran')}}">Need an account? Sign up!</a></div>
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
                            {{-- <div class="text-muted"><h5>Copyright &copy; Sakata 2022</h5></div> --}}
                            <div>
                                {{-- <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a> --}}
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
