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
              <li class="nav-item "><a href="{{url('venue')}}" class="nav-link">Venue</a></li>
            <li class="nav-item active"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item "><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('upload/'.$blog->img1)}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Detail <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Blog Detail</h1>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <p>
              <img src="{{asset('upload/'.$blog->img1)}}" alt="" class="img-fluid">
            </p>
            <h2 class="mb-0 bread text-center">{{$blog->title}}</h2><br>
            <div class="text-justify">
            {!! $blog->text1!!}
            </div>
              <img src="{{asset('upload/'.$blog->img2)}}" alt="" class="img-fluid">
            <div class="text-justify">
              {!!$blog->text2!!}
            </div>
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">{{$blog->category}}</a>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5 ">
                <img src="{{asset('avatar/lorem.png')}}" width="450px" alt="Image placeholder" class="img-fluid mb-4">
                <p style="font-size: 13px;margin-left: -10px" class="text-center">CEO CV DELTA MANAGEMENT</p>

              </div>
              <div class="desc">
                <h3>Dani</h3>
                <p>Hujan Tidak Datang Dengan Sendiri Ia Datang Bersama Kesejukan, Hal Buruk Tidak Datang Sendirian Ia Datang Bersama Pembelajaran </p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">Comments</h3>
              <ul class="comment-list" style="margin-left: -5%;">
               @foreach($komentars as $komentar)
               @if($komentar->id_blog == $blog->id)
               <li class="comment">
                  <div class="comment-body">
                    <h3>{{$komentar->name}}</h3>
                    <div class="meta">{{$komentar->created_at->format('M d Y')}} at {{$komentar->created_at->format('H:i')}}</div>
                    <p>{{$komentar->message}}</p>
                  </div>
                </li>
               @endif
               @endforeach
                
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="{{route('blogs.store')}}" method="POST" class="p-5 bg-light">

                  @csrf
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" class="form-control" id="name" required="">
                  </div>
                  <input type="text" value="{{$blog->id}}" hidden="" name="id_blog">
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="form-control" id="email" required="">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" cols="30" rows="10" class="form-control" required=""></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="{{url('blog')}}">Education <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="{{url('blog')}}">Travel <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="{{url('blog')}}">Hiburan <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="{{url('blog')}}">Event Organizer <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="{{url('blog')}}">Outbound <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="{{url('blog')}}">Preconstruction Planning <span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              @foreach($blogs as $blog )
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{asset('upload/'.$blog->img1)}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{route('bloging.show',$blog->id)}}">{{$blog->title}}</a></h3>
                  <div class="meta">
                    <div><a href="{{route('bloging.show',$blog->id)}}"><span class="icon-calendar"></span>{{$blog->created_at->format('M. d, Y')}}</a></div>
                    <div><a href="{{route('bloging.show',$blog->id)}}"><span class="icon-person"></span> {{$blog->writer}}</a></div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="{{url('/')}}" class="tag-cloud-link">home</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">builder</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">build</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">create</a>
                <a href="{{url('contact')}}" class="tag-cloud-link">Info</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">Education</a>
                <a href="{{url('service')}}" class="tag-cloud-link">Outbound</a>
                <a href="{{url('service')}}" class="tag-cloud-link">Offroad</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
@endsection