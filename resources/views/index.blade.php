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
            <li class="nav-item active"><a href="{{url('')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
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
    <div class="hero-wrap">
      <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{asset('asset/documenter/_MG_8424.jpg')}});">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                  <h2>Membantu Hari Anda Lebih Baik</h2>
                  <h1 class="mb-3">Happy Day</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url({{asset('asset/documenter/IMG_1149.jpg')}});">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                  <h2>Bekerja Sama Sebagai Tim Lebih Menyenangkan</h2>
                  <h1 class="mb-3">Team Work</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url({{asset('asset/documenter/IMG_1314.jpg')}});">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                  <h2>Bermain Di Alam Sangat Seru</h2>
                  <h1 class="mb-3">Offroad</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row mx-auto">
          <div class="col-md-3 col-sm-6 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
            <div class="media block-6 d-block text-center pt-md-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-camping"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Camping</h3>
                <p>Berkemah di alam Bebas dan Menikmati Alam</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 col-sm-6 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
            <div class="media block-6 d-block text-center pt-md-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-bonfire"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Bonfire</h3>
                <p>Pesta Api Unggun dan Bakar Ikan di malam syahdu.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 col-sm-6 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
            <div class="media block-6 d-block text-center pt-md-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-vest"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Rafting</h3>
                <p>Bermain Arum Jeram Bersiap untuk bermain Air.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 col-sm-6 mx-auto d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
            <div class="media block-6 d-block text-center pt-md-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-activity"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Fun Learning</h3>
                <p>Belajar Sambil Bermain Sangat Menyenangkan.</p>
              </div>
            </div>      
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
            <div class="py-3 d-flex">
              <div class="icon">
                <span class="flaticon-engineer"></span>
              </div>
              <div class="text">
                <h3>Expert &amp; Professional</h3>
                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
            <div class="py-3 d-flex">
              <div class="icon">
                <span class="flaticon-engineer-1"></span>
              </div>
              <div class="text">
                <h3>High Quality Work</h3>
                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
            <div class="py-3 d-flex">
              <div class="icon">
                <span class="flaticon-engineer-2"></span>
              </div>
              <div class="text">
                <h3>24/7 Help Support</h3>
                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb mt-md-5  ">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-6 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" >
<!--              <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></span>

              </a> -->
              <iframe width="560" height="350" src="https://www.youtube.com/embed/Qq01ijdedq8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    <section class="ftco-section ftco-no-pb ftco-no-pt mt-5" style="margin-bottom: -50px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bg-primary w-100 rounded px-md-0 px-4">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-8 py-4">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h2 class="mb-0" style="color:white; font-size: 24px;">Visit the available packages</h2>
                    </div>
                    <div class="col-md-4 d-flex align-items-center d-flex">
                      <a href="{{url('service')}}" class="bg-white submit btn btn-outline-warning" style="margin-top: 20px;padding-left: 20%; padding-right: 20%;">Let's Go</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($blogs as $blog)
          @if($blog->status == "PUBLISH")
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{route('bloging.show',$blog->id)}}" class="block-20 rounded " height="100%" width="0px" style="background-image: url('{{asset('upload/'. $blog->img1)}}');">
              </a>
              <div class="text mt-3 text-center">
                <div class="meta mb-2">
                  <div><a href="{{route('bloging.show',$blog->id)}}">{{$blog->created_at->format('M d , Y')}}</a></div>
                </div>
                <h3 class="heading"><a href="{{route('bloging.show',$blog->id)}}">{{$blog->title}}</a></h3>
              </div>
            </div>
          </div>
          @endif
          @endforeach

        </div>
      </div>
    </section>
    



@endsection