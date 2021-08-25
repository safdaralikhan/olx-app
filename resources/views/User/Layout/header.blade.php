<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>0Lx</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('User/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/style.css') }}">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="{{ asset('User/images/png') }}" sizes="16x16" href="User/images/23_OLX-512.png">
</head>

<body class="preload home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container-fluid">
                <!-- start .row -->
                <div class="row">
                    {{-- saffdar --}}
                    <div class="col-md-12">
                        <div class="class container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo">
                                            <a href="/">
                                                <img src=" {{ asset('User/images/23_OLX-512.png') }}" alt="logo image"
                                                    class="" style="; margin-bottom: 10px;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mt-2">
                                        <div class="field-wrapper">
                                            <form action="/search_city" method="get">
                                                <input class="relative-field rounded" name="search_city" type="text"
                                                    placeholder="City">
                                                <button class="btn btn--round"
                                                    style="padding: 0 15px; background-color: black;"
                                                    type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mt-2">
                                        <div class="field-wrapper">
                                            <form action="/search_post" method="get">
                                                <input class="relative-field rounded" name="search_post" type="text"
                                                    placeholder="Search Ads by title, price, type, condition ">
                                                <button type class="btn btn--round" type="submit"
                                                    style="background-color: black;">Search</button>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-3 mx-3">
                                        <div class="row">

                                        @if (session('user') != null)
                                            <a href="/logout" type="button" class="col-md-12 mr-0 text-center author-area__seller-btn inline mt-5"
                                                style="background-color: black; font-weight: bold;">
                                                Logout
                                            </a>
                                        @else
                                            <button type="button" class="col-md-12 mr-0 author-area__seller-btn inline mt-5"
                                                data-toggle="modal" data-target="#loginModal"
                                                style="background-color: black; font-weight: bold;">
                                                Login
                                            </button>
                                        @endif
                                        <div class="col-md-12">


                                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content" style="height: auto">
                                                    <div class="modal-header border-bottom-0 p-0">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-0">
                                                        <div class="row">
                                                            <div class="col-md-12 col-12">
                                                                <div class="form-title text-center">
                                                                    <h4 class="py-1 font-weight-bold">LogIn</h4>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row p-1">
                                                            <div class="col-md-12 col-sm-12">
                                                                <a href="/auth/facebook"
                                                                    class="btn btn-md btn-block omb_btn-facebook border border-dark">
                                                                    <i class="fa fa-facebook"></i>
                                                                    <span class="hidden-xx">Facebook</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="row p-1">
                                                            <div class="col-md-12 col-sm-12">
                                                                <a href="/login/google"
                                                                    class="btn btn-md btn-block omb_btn-google border border-dark">
                                                                    <i class="fa fa-google-plus"></i>
                                                                    <span class="hidden-xx">Google+</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="row p-1">
                                                            <div class="col-md-12 col-sm-12">
                                                                <a href="{{ route('loginForm') . '#loginform' }}"
                                                                    class="btn btn-md btn-block omb_btn-google border border-dark">
                                                                    <span class="hidden-xs">Continue with Email</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="row p-1">
                                                            <div class="col-md-12 col-sm-12">
                                                                <a href="{{ route('moblogin') }}"
                                                                    class="btn btn-md btn-block omb_btn-google border border-dark">
                                                                    <span class="hidden-xs">Continue with Number</span>
                                                                </a>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    </div>
                                    <div class="col-md-3 mx-3 mt-1">
                                        <div class="row">

                                        @if (session('user') != null)
                                            <a href="/add_post" class="col-md-12 mr-0 text-center author-area__seller-btn inline mt-5"
                                                style="background-color: black; font-weight: bold">+ Seller</a>
                                        @else
                                            <a href="" data-toggle="modal" data-target="#loginModal"
                                                class="col-md-12 mr-0 text-center author-area__seller-btn inline mt-5"
                                                style="background-color: black; font-weight: bold">+ Seller</a>
                                        @endif

                                    </div>
                                </div>
                                    <div class="col-md-2">
                                        <div class="row">

                                        
                                        <div class="author__notification_area col-md-12 text-center mt-3">
                                            <ul>
                                               

                                                <li class="has_dropdown">
                                                    <div class="icon_wrap">
                                                        <span class="lnr lnr-envelope"></span>
                                                        <span
                                                            class="notification_count msg">{{ $messagecount }}</span>
                                                    </div>

                                                    <div class="dropdowns messaging--dropdown">
                                                        <div class="dropdown_module_header">
                                                            <h4>My Messages</h4>
                                                            <a href="message.html">View All</a>
                                                        </div>

                                                        <div class="messages">

                                                            {{-- {{$messangers}} --}}
                                                            @if (isset($messangers))

                                                                @foreach ($messangers as $messangers)
                                                                    @if ($messangers->reciver_id == session('id'))
                                                                        <a href="/messangerload/{{ $messangers->ad_id }}"
                                                                            class="message">
                                                                            <div class="message__actions_avatar">
                                                                                <div class="avatar">
                                                                                    @if (isset($messangers->reciver_avatar))
                                                                                        <img src="{{ $messangers->reciver_avatar }}"
                                                                                            alt="">
                                                                                    @else
                                                                                        <img src="{{ asset('User/images/profile_images/' . $messangers->reciver_image) }}"
                                                                                            alt="">
                                                                                    @endif

                                                                                </div>
                                                                            </div>
                                                                            <!-- end /.actions -->

                                                                            <div class="message_data">
                                                                                <div class="name_time">
                                                                                    <div class="name">
                                                                                        <p>{{ $messangers->sender_name }}
                                                                                        </p>
                                                                                        <span
                                                                                            class="lnr lnr-envelope"></span>
                                                                                    </div>

                                                                                    <span class="time">Just now</span>
                                                                                    {{-- <p>{{$messangers->message}}</p> --}}
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /.message_data -->
                                                                        </a>
                                                                    @else

                                                                        <a href="/messangerload/{{ $messangers->ad_id }}"
                                                                            class="message">
                                                                            <div class="message__actions_avatar">
                                                                                <div class="avatar">
                                                                                    @if (isset($messangers->sender_avatar))
                                                                                        <img src="{{ $messangers->sender_avatar }}"
                                                                                            alt="">
                                                                                    @else
                                                                                        <img src="{{ asset('User/images/profile_images/' . $messangers->sender_image) }}"
                                                                                            alt="">
                                                                                    @endif

                                                                                </div>
                                                                            </div>
                                                                            <!-- end /.actions -->

                                                                            <div class="message_data">
                                                                                <div class="name_time">
                                                                                    <div class="name">
                                                                                        <p>{{ $messangers->reciver_name }}
                                                                                        </p>
                                                                                        <span
                                                                                            class="lnr lnr-envelope"></span>
                                                                                    </div>

                                                                                    <span class="time">Just now</span>
                                                                                    {{-- <p>{{$messangers->message}}</p> --}}
                                                                                </div>
                                                                            </div>
                                                                            <!-- end /.message_data -->
                                                                        </a>

                                                                        <!-- end /.message -->
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                    </div>
                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <div class="row">
                                            
                                        <div class="author-author__info inline has_dropdown col-md-12 text-center">
                                            
                                            @if (session('user_img') != null)

                                                <div class="author__avatar">

                                                    <img src="{{ session('user_img') }}"
                                                        style="height: 50px; width:50px;" alt="user avatar">
                                                @elseif(session('user_imgE') != null)
                                                    <img src="User/images/profile_images/{{ session('user_imgE') }}"
                                                        style="height: 50px; width:50px;" alt="user avatar">
                                                @else

                                                    <img src="User/images/profile_images/userimg.png"
                                                        style="height: 50px; width:50px;" alt="user avatar">

                                                </div>
                                            @endif
                                            <div class="autor__info">
                                                <p class="name">
                                                    {{ session('user') }}
                                                </p>

                                            </div>

                                            <div class="dropdowns dropdown--author">
                                                <ul>
                                                    <li>
                                                        <a href="user-profile/{{ session('id') }}">
                                                            <span class="lnr lnr-user"></span>Profile</a>
                                                    </li>
                                                  

                                                    <li>
                                                        @if (session('id') != null)
                                                            <a href="{{ route('my-ads', session('id')) }}">
                                                                <span class="lnr lnr-upload"></span>My ads</a>
                                                        @else
                                                            <a href="" data-toggle="modal" data-target="#loginModal">
                                                                <span class="lnr lnr-upload"></span>My ads</a>
                                                        @endif
                                                    </li>


                                                    <li>
                                                        <a href="/logout">
                                                            <span class="lnr lnr-exit"></span>Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </div>

                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    </div>
                    {{-- saffdar --}}
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12 col-12" style="box-sizing: initial; ;">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->

                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        