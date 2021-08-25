
<?php
use Carbon\Carbon;


?>

            @include('User.Layout.header')
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

    <!--================================
    START HERO AREA
=================================-->


    <!--================================
    START FEATURE AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->

    <!--================================
    END PRODUCTS AREA
=================================-->
              

<!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Registration</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Registration</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <h2 class="bg-success text-center" style="color: whitesmoke">{{session('registerSuccess')}}</h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    
                        <div class="cardify login" id="signupform">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign up here</p>
                            </div>
                            <!-- end .login_header -->
                            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="user_name" name="username" type="text" class="text_field"
                                        placeholder="Enter your username...">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Email</label>
                                    <input id="user_name" name="email" type="email" class="text_field"
                                        placeholder="Enter your Email...">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Contact</label>
                                    <input id="user_name" name="contact" type="number" class="text_field"
                                        placeholder="Enter your contact...">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Address</label>
                                    <input id="user_name" name="address" type="text" class="text_field"
                                        placeholder="Enter your address...">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Gender</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                </div>
                                @csrf
                                <div class="form-group">
                                    <label for="user_name">Profile Image</label>
                                    <input type="file" name="user_img" class="form-control" id="">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input id="pass" name="password" type="text" class="text_field"
                                        placeholder="Enter your password...">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Confirm Password</label>
                                    <input id="pass" name="confirm-password" type="text" class="text_field"
                                        placeholder="Enter your password...">
                                </div>


                                <button class="btn btn--md btn--round" type="submit"
                                    style="background-color: black;">Sign up Now</button>

                            </div>
                            <div class="login_assist">

                                <p class="signup">already hav a
                                    <a href="{{route('loginForm')}}">account</a>?
                                </p>
                            </div>
                        </form>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->

  


   

   
  

    <!--================================
    END CALL TO ACTION AREA
=================================-->

    <!--================================
    START FOOTER AREA
=================================-->
    <footer class="footer-area">
        @include('User.Layout.bigFooter')
        <!-- end /.footer-big -->
        @include('User.Layout.miniFooter')     
    </footer>
    <!--================================
    END FOOTER AREA
=================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    @include('User.Layout.script')

   

