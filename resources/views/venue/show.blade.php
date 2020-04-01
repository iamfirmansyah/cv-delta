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
            <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
            <!-- <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li> -->
            <li class="nav-item "><a href="{{url('service')}}" class="nav-link">Product & Services</a></li>
              <li class="nav-item active"><a href="{{url('venue')}}" class="nav-link">Venue</a></li>
            <li class="nav-item"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item "><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('asset/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Venue <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Detail</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-6 col-sm-12">
          <img src="{{asset('upload/'.$veneu->cover)}}" width="100%" alt="">
        </div>
        <div class="col-lg-6 col-sm-12 text-center">
          <h2 class="font-weight-bold text-center">{{$veneu->title}}</h2>
          <hr width="50%">
          {!!$veneu->text1!!}
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12"style="text-align: justify;"><br>
            {!!$veneu->text2!!}
            
          </div>
        </div>
      </div><br><br>
        <div class="row justify-content-center">
                           <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel" >
                                <div class="item">
                                    <img src="{{asset('upload/'.$veneu->pict1)}}" class="img-fluid" alt="" height="200px">
                                </div>
                                <div class="item">
                                    <img src="{{asset('upload/'.$veneu->pict2)}}" class="img-fluid" alt=""  height="200px">
                                </div>
                                <div class="item">
                                    <img src="{{asset('upload/'.$veneu->pict3)}}" class="img-fluid" alt=""  height="200px">
                                </div>
                                <div class="item">
                                    <img src="{{asset('upload/'.$veneu->pict4)}}" class="img-fluid" alt=""  height="200px">
                                </div>
                                
                              </div>
                           </div>
      </div>
    </div>
@endsection
