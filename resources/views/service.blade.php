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
            <li class="nav-item "><a href="{{url('about')}}" class="nav-link">About</a></li>
            <!-- <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li> -->
            <li class="nav-item active"><a href="{{url('service')}}" class="nav-link">Product & Services</a></li>
              <li class="nav-item "><a href="{{url('venue')}}" class="nav-link">Venue</a></li>
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
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Product & Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Product & Services</h1>
          </div>
        </div>
      </div>
    </section>
    

  <div class="col-md-12 heading-section"><br>
    <h2 class="mb-4 text-center">Paket Program Outbound</h2>
  </div>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb mt-md-5  ">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-6 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"  style="background-image:url({{asset('asset/images/IMG_1149.jpg')}});" >
            </div>
          </div>
          <div class="col-md-6 pl-md-5">
            <div class="row justify-content-start py-5">
              <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-4">
                <span class="subheading">Paket</span>
                <h2 class="mb-4">Fun Game</h2>
                <!-- <p>berpengalaman sejak tahun 2007 dengan basic metode Experiential Learning.</p> -->
          <p>Kegiatan outbound menumbuhkan rasa percaya diri anak, karena seluruh kegiatan dibuat menyenangkan. Anak yang semula takut ketinggian akan meaajdi lebih berani. Anak yang semula tidak berani mengeluarkan pendapat akan berani tampil, dan seterusnya.</p>
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
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"  style="background-image:url({{asset('asset/documenter/IMG_8624.jpg')}});" >
            </div>
          </div>
          <div class="col-md-6 pl-md-5">
            <div class="row justify-content-start py-5">
              <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-4">
                <span class="subheading">Paket</span>
                <h2 class="mb-4">Fun Learning</h2>
                <!-- <p>berpengalaman sejak tahun 2007 dengan basic metode Experiential Learning.</p> -->
          <p>Outbound umumnya mempunyai kegiatan yang diselingi dengan berbagai game tantangan alam dan tantangan berpikir. Mendapatkan tantangan berpikir, anak akan berlatih menyelesaikan masalahnya sendiri dan menyatukan pendapat dengan teman sekelompok. Anak akan belajar menerima beberapa perbedaan pendapat dan menghasilkan pendapat yang mewakili kelompoknya.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
       
        <section class="ftco-section ftco-no-pt ftco-no-pb  ">
      <div class="container mx-auto">
        <div class="row d-flex no-gutters">
          <div class="col-md-12 col-sm-12">
            <div class="row justify-content-start py-5">
              <div class="col-md-12 text-center heading-section ftco-animate pl-md-4 py-md-4">
                <span class="subheading">Paket</span>
                <h2 class="mb-4">Paintball</h2>
                <p>Simulasi tempur dengan menggunakan senjata semi otomatis dengan peluru cat air, peserta akan merasakan tantangan dalam menyusun strategi,kerjasama team dan komunikasi. Paket Wisata Outbound Aman karena semua fasilitas yang dibutuhkan anak sudah dilengkapi dengan standar keamanan yang tinggi. 
</p>
                <!-- <p>berpengalaman sejak tahun 2007 dengan basic metode Experiential Learning.</p> -->
          <div class="row">
            <div class="col-md-12 col-sm-12 mx-auto">
              <img src="{{asset('asset/documenter/DSC_0053.JPG')}}" class="" alt="" width="450"> 

            </div>

          </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
       <section class="ftco-section ftco-no-pt ftco-no-pb  " style="margin-top: -5%"  >
      <div class="container mx-auto">
        <div class="row d-flex no-gutters">
          <div class="col-md-12 col-sm-12">
            <div class="row justify-content-start py-5">
              <div class="col-md-12 text-center heading-section ftco-animate pl-md-4 py-md-4">
                <span class="subheading">Paket</span>
                <h2 class="mb-4">Fun Journey Offroad</h2>
                <p>Menyusuri alampegunungan dengan menggunakan kendaran penggerak 4 roda(4 WD) dapat menambah kebersamaan dalam perjalanan.</p>
                <!-- <p>berpengalaman sejak tahun 2007 dengan basic metode Experiential Learning.</p> -->
          <div class="row">
            <div class="col-md-12">
              <img src="{{asset('asset/documenter/IMG_1314.JPG')}}" alt="" width="450">  

            </div>

          </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

 <section class="ftco-section ftco-no-pt ftco-no-pb  " style="margin-top: -5%">
      <div class="container mx-auto">
        <div class="row d-flex no-gutters">
          <div class="col-md-12 col-sm-12">
            <div class="row justify-content-start py-5">
              <div class="col-md-12 text-center heading-section ftco-animate pl-md-4 py-md-4">
                <span class="subheading">Paket</span>
                <h2 class="mb-4">Arung Jerang (Rafting)</h2>
                <p>Menyusurikeindahan dan kemurnian sungai ciliwung dengan menggunakanperahu karet.</p>
                <p>Pilihan Sungai : <hr width="200">1. Sungai kali baru (aksesdari Sentul) <br> 2. Sungai Ciliwung (aksesdari Puncak)<br> 3. Sungai cisadane ( Akses dari Cimande)<hr width="300">
</p>
                <!-- <p>berpengalaman sejak tahun 2007 dengan basic metode Experiential Learning.</p> -->
          <div class="row mx-auto">
            <div class="col-md-12 col-sm-12">
              <img src="{{asset('asset/documenter/_MG_8424.JPG')}}" alt="" width="450">  <br><br>
              <a href="https://kontakk.com/wa/39b361" class="btn btn-success" align="center" target="_blank"><span class="fa fa-phone"> Hubungi Sekarang</span></a>
            </div>
            
          </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
@endsection