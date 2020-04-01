@extends('admin.layouts.app')
@section('content')
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
   
       <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="{{url('admin/dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Content</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown ">
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
                    <li class="menu-item-has-children dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Blog</a>
                        <ul class="sub-menu children dropdown-menu ">
                            <li><i class="fa fa-table "></i><a href="{{url('admin/blog')}}">Show All</a></li>
                            <li><i class="fa fa-pencil-square-o"></i><a href="{{url('admin/blog/create')}}">Create Blog</a></li>
                            <li><i class="fa fa-comments-o"></i><a href="{{url('admin/komentar')}}">Comment</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown active">
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
                                @foreach($messages as $message)
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
                                    <li><a href="#">User</a></li>
                                    <li class="active">Edit Profile</li>
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
                            <div class="col-md-6 offset-3"><br>
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{ route('user.update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        @method('PUT')

                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" id="profile-img-tag" width="80px" height="80px" src="{{asset('avatar/'. auth()->user()->foto)}}" alt="Harus Persegi">
                                           <div class="mx-auto text-center">
                                                <label for="profile-img" class="mx-auto d-block"><i class="btn fa fa-camera"></i></label>
                                           </div>
                                           <input type="file" name="foto" id="profile-img"  hidden="">
                                            <h5 class="text-sm-center mt-2 mb-1 font-weight-bold">{{auth()->user()->name}}</h5>
                                            <h5 class="text-sm-center mt-2 mb-1">{{auth()->user()->email}}</h5>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                            <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                            <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                            <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label for="">Email</label>
                                         <input type="text" class="form-control" name="email" value="{{auth()->user()->email}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" value="{{auth()->user()->password}}" disabled="">
                                    <input type="hidden" name="fotoLama" value="{{ auth()->user()->foto }}">

                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">UPDATE</button>
                                    </div>
                                </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content <--></-->
@endsection