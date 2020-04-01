@extends('admin.layouts.app')
@section('content')
      <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="{{url('admin/dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Content</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-envelope"></i>Message</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-tags"></i><a href="{{url('admin/message')}}">Show All</a></li>
                            
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-camera-retro"></i>Venue</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-map-marker"></i><a href="{{url('admin/veneu')}}">Show All</a></li>
                            <li><i class="fa fa-pencil"></i><a href="{{url('admin/veneu/create')}}">Add Venue</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Blog</a>
                        <ul class="sub-menu children dropdown-menu ">
                            <li><i class="fa fa-table "></i><a href="{{url('admin/blog')}}">Show All</a></li>
                            <li><i class="fa fa-pencil-square-o"></i><a href="{{url('admin/blog/create')}}">Create Blog</a></li>
                            <li><i class="fa fa-comments-o"></i><a href="{{url('admin/komentar')}}">Comment</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-users"></i><a href="{{url('admin/user')}}">All User</a></li>
                            <li><i class="menu-icon fa fa-unlock-alt"></i><a href="{{url('admin/user/edit')}}">Edit Profile</a></li>
                        </ul>
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('admin/dashboard')}}"><img src="{{asset('admin/images/logo.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="{{url('admin/dashboard')}}"><img src="{{asset('admin/images/logo2.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
             <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                @foreach($messagess as $message)
                                <a class="dropdown-item media" href="{{route('message.show',$message->id)}}" target="_blank">
                                    <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/avatar.png')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">{{$message->full_name}}</span>
                                        <span class="time float-right">{{$message->created_at->format('H:i')}}</span>
                                        <p>{{Str::limit($message->message, 35)}}</p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('avatar/'. auth()->user()->foto)}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{url('admin/user/')}}"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="{{url('admin/komentar')}}"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="{{url('admin/user/edit')}}"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    <i class="fa "></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li class="active">Create</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Article</strong>
                            </div><br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class=" form-control-label">Title</label>
                            <input type="text" autocomplete="off" name="title" value="{{$blog->title}}" class="form-control">
                        </div>
                        <div class="">
                    <style>
                      #cke_1_contents{
                        height: 450px!important;
                      }
                    </style>
                        <textarea name="text1" id="text1" rows="10" cols="80">
                            {{$blog->text1}}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'text1' );
                        </script>
                            <br>    
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="accordion" id="accordionExample">
                                  <div class="card">
                                    <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Show Paragraf 2
                                        </button>
                                      </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                                        <textarea name="text2" id="text2" rows="10" cols="80">
                                        {{$blog->text2}}
                                        </textarea>
                                        <script>
                                            // Replace the <textarea id="editor1"> with a CKEditor
                                            // instance, using default configuration.
                                            CKEDITOR.replace( 'text2' );
                                        </script>
                                            <br>    
                                      </div>
                                    </div>
                                  </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
{{--                             <div class="form-group col-md-6">
                                <label for="" class="form-control-label">Image Cover</label>
                            <input type="file" id="profile-img" name="img1" class="form-control"><br>

                            <label for="" class="form-control-label">Image 2</label>
                            <input type="file" id="" name="img2" class="form-control"><br>
                             --}}
                           <div class="col-md-6">
                                <select name="category" id="" data-placeholder="Category ..."  class="standardSelect form-control"  required>
                                <option value="{{$blog->category}}">{{$blog->category}}</option>
                                <option value="Hiburan">Hiburan</option>
                                <option value="Edukasi">Edukasi</option>
                                <option value="Travel">Travel</option>
                            </select>
                           </div>
                        </div>
                        <div class="row" style="margin-top: 2%">
                            <div class="col-md-3">  
                                <input type="file" class="form-control" name="img1">
                                <img src="{{asset('upload/' . $blog->img1)}}" id="profile-img-tag" class="img-thumbnail " alt="" width="200px">
                            </div>                            
                            <div class="col-md-3">  
                                <input type="file" class="form-control" name="img2">
                                <img src="{{asset('upload/' . $blog->img2)}}" name="pict3" id="profile-img-tag" class="img-thumbnail " alt="" width="200px">
                            </div>
                        </div>
{{--                         <div class="col-md-6">
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQoAiieUwg5-P1GXsZbSBHpGl9WOzMq_-E4IEh_u8cPh00b2e-N" id="profile-img-tag" alt="" width="200px">
                        </div> --}}
                        {{-- <input type="text" name="status" hidden value="DRAFT"> --}}
                        </div>
                        <input type="text" name="writer" hidden value="{{ $blog->writer}}">
                        <input type="hidden" name="fotoLama" value="{{ $blog->img1 }}">
                        <input type="hidden" name="fotoLama2" value="{{ $blog->img2 }}">
                        <input type="text" hidden=""  name="status" value="{{$blog->status}}">
                        <div class="">
                         <button type="submit" class="btn btn-primary" style="padding-left: 2%;padding-right: 2%;">Update</button>
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection