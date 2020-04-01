@extends('layouts.home')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item "><a href="{{url('')}}" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="{{url('about')}}" class="nav-link">About</a></li>
            <!-- <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li> -->
            <li class="nav-item "><a href="{{url('service')}}" class="nav-link">Product & Services</a></li>
              <li class="nav-item "><a href="{{url('venue')}}" class="nav-link">Venue</a></li>
            <li class="nav-item"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item "><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('asset/documenter/IMG_1314.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-6 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url({{asset('asset/documenter/IMG_1149.jpg')}});">
              <!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></span>
              </a> -->
            </div>
          </div>
          <div class="col-md-6 pl-md-5">
            <div class="row justify-content-start py-5">
              <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-4">
                <span class="subheading">Delta Management</span>
                <h2 class="mb-4">We create and turn into reality</h2>
                <p>berpengalaman sejak tahun 2007 dengan basic metode Experiential Learning.</p>
                <div class="tabulation-2 mt-4">
                  <ul class="nav nav-pills nav-fill d-md-flex d-block">
                    <li class="nav-item mb-md-0 mb-2">
                      <a class="nav-link  py-2" data-toggle="tab" href="#home1">Our Mission</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link py-2 mb-md-0 mb-2 active" data-toggle="tab" href="#home3">CV Delta</a>
                    </li>
                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                      <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
                    </li>
                   
                  </ul>
                  <div class="tab-content bg-light rounded mt-2">
                    <div class="tab-pane container p-0 fade" id="home1">
                      <p>Menjadi mitra pembelajaran, mitra pemberdayaan, mitra kerja serta mitra bisnis yang berkompeten dan terpercaya dalam menyelengarakan program indoor activity dan outdoor activity.</p>
                    </div>
                    <div class="tab-pane container p-0 active" id="home2">
                    
                      <p>Salah satu perusahaan yang bergerak dibidang jasa penyelenggaraan serta pelaksanaan Program Indoor Activity dan Outdoor Activity.</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="home3">
                        <p>Ikut berperan aktif dalam peningkatan kapasitas SDM yang bermanfaat bagi konsumen dalam memajukan perusahaan ataupun instansi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text-2">
                <span>Years of <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text-2">
                <span>Project <br>Done</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="378">0</strong>
              </div>
              <div class="text-2">
                <span>Professional <br>Expert</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="1200">0</strong>
              </div>
              <div class="text-2">
                <span>Machineries <br>Equipments</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb mt-md-5">
      <div class="container-fluid px-md-0 mt-md-5">
                  <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-4">Our Activity</h2>
          </div>

        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{asset('asset/documenter/DSC_0077.jpg')}});">
              <a href="{{asset('asset/documenter/DSC_0077.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Fun Learning</span>
                  <h2><a href="work-single.html">Provider Professional</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{asset('asset/documenter/_MG_8424.jpg')}});">
              <a href="{{asset('asset/documenter/_MG_8424.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Rafting</span>
                  <h2><a href="work-single.html">Fun with Playing Water</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{asset('asset/documenter/IMG_1314.jpg')}});">
              <a href="{{asset('asset/documenter/IMG_1314.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Offroad</span>
                  <h2><a href="work-single.html">Find a Thrilling Adventure</a></h2>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{asset('asset/documenter/IMG_3931.jpg')}});">
              <a href="{{asset('asset/documenter/IMG_3931.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Golden Time</span>
                  <h2><a href="work-single.html">Time to enjoy</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{asset('asset/documenter/IMG_8606.jpg')}});">
              <a href="{{asset('asset/documenter/IMG_8606.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Fun</span>
                  <h2><a href="work-single.html">Happy Fun with other people</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{asset('asset/documenter/DSC_0053.jpg')}});">
              <a href="{{asset('asset/documenter/DSC_0053.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Paintball</span>
                  <h2><a href="work-single.html">Fight like a Real One</a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>


@endsection
