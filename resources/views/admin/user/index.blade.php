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
                                    <li class="active">All User</li>
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
                                <strong class="card-title">All User</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach($users as $user)
                                        @if($user->role == 'super admin')
                                         <tr>
                                            <td class="serial">{{++$i}}</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('avatar/' . $user->foto ) }}" alt=""></a>
                                                </div>
                                            </td>
                                            <td> <span class="name">{{$user->name}}</span> </td>
                                            <td class="text-lowercase">{{$user->email}} </td>
                                            <td class="text-center"> <span class="badge badge-success font-weight-bold text-capitalize">{{$user->role}}</span> </td>
                                            <td class="text-center"><span >
                                                {{-- <a href="" class="btn btn-danger fa fa-times"></a> --}}
                                                <a href="" class="btn fa fa-eye"></a>
                                                {{-- <a href="" class="btn btn-primary fa fa-edit"></a> --}}
                                            </span></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td class="serial">{{++$i}}</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('avatar/' . $user->foto ) }}" alt=""></a>
                                                </div>
                                            </td>
                                            <td> <span class="name">{{$user->name}}</span> </td>
                                            <td class="text-lowercase">{{$user->email}} </td>
                                            <td class="text-center"> <span class="badge badge-primary font-weight-bold text-capitalize">{{$user->role}}</span> </td>
                                            <td class="text-center"><span >
                                                {{-- <a href="" class="btn btn-danger fa fa-times"></a> --}}
                                                <a href="" class="btn fa fa-eye"></a>
                                                {{-- <a href="" class="btn btn-primary fa fa-edit"></a> --}}
                                            </span></td>
                                        </tr>
                                        @endif
                                        @endforeach
                                       
                                        
                                    </tbody>

                                </table><br>
                                    {!! $users->links() !!}

                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection