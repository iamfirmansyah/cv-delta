<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Outbound Provider</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  </head>
  <body>

    <div class="container pt-5" style="padding-right: 10px;padding-left: 0px!important;">
      <div class="row justify-content-between">
        <div class="col float-left col-sm-6">
          <!-- <a class="navbar-brand" href="index.html">Delta<span> Management</span></a> -->
          <a href="{{url('')}}"><img src="{{asset('asset/logo/logo.png')}}" class="text-center mx-auto" style="margin-bottom: 3%;margin-top: -5%;" width="40%;" alt=""></a>
        </div>
        <div class="col d-flex justify-content-end col-sm-6">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="https://www.facebook.com/delta.outbound.315" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
              <a href="https://www.instagram.com/delta_outbound/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
              <a href="https://www.youtube.com/channel/UChSL2TCBiaT7OwDJtLWGTBw" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>

            </p>
          </div>
        </div>
      </div>
    </div>



        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
            <div class="container-fluid px-lg-5">
                <div class="row">
                    <div class="col-md-12 py-5">
                        <div class="row">
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">About us</h2>
                                <p>Salah satu perusahaan yang bergerak dibidang jasa penyelenggaraan serta pelaksanaan Program Indoor Activity dan Outdoor Activity.</p>
                                <ul class="ftco-footer-social p-0">
                      
                      <li class="ftco-animate"><a href="https://www.facebook.com/delta.outbound.315" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="https://www.instagram.com/delta_outbound/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                      <li class="ftco-animate"><a href="https://www.youtube.com/channel/UChSL2TCBiaT7OwDJtLWGTBw" target="_blank" data-toggle="tooltip" data-placement="top" title="youtube"><span class="ion-logo-youtube"></span></a></li>
                    </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <h2 class="footer-heading">Services</h2>
                                                <ul class="list-unstyled">
                                      <li><a href="{{url('service')}}" class="py-1 d-block">Construction</a></li>
                                      <li><a href="{{url('service')}}" class="py-1 d-block">House Renovation</a></li>
                                      <li><a href="{{url('service')}}" class="py-1 d-block">Painting</a></li>
                                      <li><a href="{{url('service')}}" class="py-1 d-block">Arhictecture Design</a></li>
                                    </ul>
                                            </div>
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <h2 class="footer-heading">About</h2>
                                                <ul class="list-unstyled">
                                      <li><a href="{{url('about')}}" class="py-1 d-block">Staff</a></li>
                                      <li><a href="{{url('about')}}" class="py-1 d-block">Team</a></li>
                                      <li><a href="{{url('about')}}" class="py-1 d-block">Careers</a></li>
                                      <li><a href="{{url('about')}}" class="py-1 d-block">Blog</a></li>
                                    </ul>
                                            </div>
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <h2 class="footer-heading">Contact</h2>
                                                <ul class="list-unstyled">
                                      <li><a href="{{url('contact')}}" class="py-1 d-block">Security</a></li>
                                      <li><a href="{{url('contact')}}" class="py-1 d-block">Global</a></li>
                                      <li><a href="{{url('contact')}}" class="py-1 d-block">Charts</a></li>
                                      <li><a href="{{url('contact')}}" class="py-1 d-block">Privacy</a></li>
                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-md-5">
                            <div class="col-md-12">
                                <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('asset/js/popper.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset/js/scrollax.min.js')}}"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('asset/js/google-map.js')}}"></script>
  <script src="{{asset('asset/js/main.js')}}"></script>
    
  </body>
</html>