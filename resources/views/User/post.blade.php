<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>OLx - Sign Up</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('User/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('User/style.css')}}">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('User/images/23_OLX-512.png')}}">
</head>


<body class="preload signup-page">



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
                                <a href="#" class="font-weight-bold">OLx</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <!-- start .col-md-3 -->
                        <div class="col-lg-1 col-md-1 col-1">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/23_OLX-512.png" alt="logo image" class="float-right">
                                </a>
                            </div>
                        </div>
                        </div>
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
            START SIGNUP AREA
    =================================-->
    <section class="section--padding2 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
            <h2 class="font-weight-bold text-center">POST YOUR AD</h2>
        </div>
    </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="shortcode_modules">
                        <div class="modules__title">
                            <h5 class="font-weight-bold">CHOOSE A CATEGORY</h5>
                        </div>
                        <div class="modules__content">
                            <div class="panel-group accordion" role="tablist" id="accordion">
                                <?php $id = 1;?>
                                @foreach ($categories as $item)
                                    
                                
                                <div class="panel accordion__single" id="panel-one">
                                    <div class="single_acco_title">
                                        <h4>
                                            <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false" data-target="#colaps{{$item->id}}" aria-controls="collapse1">
                                                <span>{{$item->cat_name}}</span>
                                                <i class="lnr indicator lnr-chevron-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    @foreach ($item->subcategory as $sub)
                                    <div id="colaps{{$item->id}}" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion" style="">
                                        <div class="panel-body">
                                            <li class="border border-dark">
                                                <a href="/add_item/{{$sub->id}}">{{$sub->subcat_name}}</a>
                                            </li>
                                        </div>
                                    </div>  
                                    @endforeach


                                </div>

                                @endforeach
                                <!-- end /.accordion__single -->

                            </div>
                            
                            <!-- end /.accordion -->
                        </div>
                    </div>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END SIGNUP AREA
    =================================-->

  <!--================================
    START FOOTER AREA
=================================-->
    <footer class="footer-area">
        <!-- end /.footer-big -->
        @include('User.Layout.miniFooter')
                        

                        
                    
        
    </footer>
    <!--================================
    END FOOTER AREA
=================================-->
@include('User.Layout.script')

</body>
</html>