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
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/23_OLX-512.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .mybred {
            border: 1px solid rgb(124, 121, 121);

        }

        .adtitle {
            font-size: 10px;

        }

        .num1 {


            font-size: 10px;
            float: right;
        }

        .num2 {
            float: right;
            font-size: 10px;
        }

        .dscp {
            font-size: 10px;
            float: left;
        }

        .img {
            float: left;
            width: 80px;
            height: 80px;
        }

        .rev {
            float: right;
        }

        .num3 {
            float: right;
        }

        .rvd {
            float: left;
        }

        .ads {
            float: left;
        }

        .check {
            float: right;
        }

        .tboxsize {
            width: 500px;
        }

        .dz-error-message,
        .dz-success-mark,
        .dz-error-mark {
            display: none;
        }
        .col-md-2.img input[type=file]
{
opacity:0.0;
position:absolute;
height: 100%;
overflow: hidden;
top:0;
left:0;
}
    </style>
</head>

<body>
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb bg-dark">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="signup.html" class="font-weight-bold">OLx</a>
                            </li>
                        </ul>
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

    <h1 class="text-center font-weight-bold">POST YOUR AD</h1>
    <div class="container">
        <div class="col-md-7 mx-auto mybred">

            <!-- breadcrumb start -->
            <h6 class="font-weight-bold">SELECTED CATEGORY</h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Mobiles</li>
                    <li class="breadcrumb-item">Tablets</li>
                    <li class="breadcrumb-item active underline" aria-current="page"><a href="signup.html"> Changes </a></li>
                </ol>
            </nav>
            <hr>
            <!-- breadcrumb END -->


            <div class="mb-3 col-md-12">
                <h5 class="font-weight-bold">INCLUDE SOME DETAILS</h5>
                <form action="/update_ad/{{$data->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="{{$data->id}}" name="subcat_id">
                    <input type="hidden" value="{{$data->category_id}}" name="cat_id">
                <label for="formGroupExampleInput" class="form-label">Ad title</label>
                <input type="text" name="title" value="{{$data->title}}" class="form-control" width="60%" id="formGroupExampleInput" placeholder="">
                <span class="adtitle">A minimum length of 5 characters is required. Please edit the field.</span>
                <span class="num1">0/70</span>
            </div>

            <div class="form-floating mb-3 mt-4 col-md-12">
                <span>Description</span>
                <textarea class="form-control" name="description" value="" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px">{{$data->description}}</textarea>
                <span class="dscp">Include condition, features and reason for selling</span>
                <span class="num2">0 / 4096</span>
            </div>
            <hr>
            <div>
                <span>Type</span>
                <br> 
                <span><label for="">Accessories for Man</label> <input type="radio" value="Accessories for Man" {{($data->type == 'Accessories for Man') ? 'chacked' : ''}} name="type" id=""></span>
                <span><label for="">Accessories for Woman</label> <input type="radio" value="Accessories for Woman" {{($data->type == 'Accessories for Woman') ? 'chacked' : ''}} name="type" id=""></span>
            </div>

            <div class="mb-4 mt-4">
                <span>Condition</span> <br>
                <span><label for="">New</label> <input type="radio" value="New" {{($data->type == 'New') ? 'chacked' : ''}} name="condition" id=""></span>
                <span><label for="">Used</label> <input type="radio" value="Used" {{($data->type == 'Used') ? 'chacked' : ''}} name="condition" id=""></span>

            </div>

            <h5 class="font-weight-bold">SET A PRICE</h5>
            <div class="col-md-12">
                <span>Price*</span>
                <div class="input-group flex-nowrap ">

                    <span class="input-group-text" id="addon-wrapping">RS</span>
                    <input type="text" class="form-control" value="{{$data->price}}" name="price" placeholder="" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
            </div>
            <hr>

            <h5 class="font-weight-bold">UPLOAD UP TO 12 PHOTOS</h5>
            <section>
                                   
                <div class="row">

                    <div class="col-md-2 img" id='uimg1'  name='book_img'>
                        <img  src='{{ asset('User/images/post_images/'.$data->main_img) }}'  width='100%' id='pic'/>
                       <input type="file" name='main_img' onchange='readImage(this)' />
                   </div>


            <div class="col-md-2 img" id='uimg2'  name='book_img'>
                <img  src='{{ asset('User/images/post_images/'.$data->img2) }}'  width='100%' id='pic'/>
               <input type="file" name='img2' onchange='readImage(this)' />
           </div>

           <div class="col-md-2 img" id='uimg3'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img3) }}'  width='100%' id='pic'/>
           <input type="file" name='img3' onchange='readImage(this)' />
       </div>

           <div class="col-md-2 img" id='uimg4'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img4) }}'  width='100%' id='pic'/>
           <input type="file" name='img4' onchange='readImage(this)' />
       </div>


           <div class="col-md-2 img" id='uimg5'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img5) }}'  width='100%' id='pic'/>
           <input type="file" name='img5' onchange='readImage(this)' />
       </div>


       <div class="col-md-2 img" id='uimg6'  name='book_img'>
        <img  src='{{ asset('User/images/post_images/'.$data->img6) }}'  width='100%' id='pic'/>
       <input type="file" name='img6' onchange='readImage(this)' />
   </div>



<div class="col-md-2 img" id='uimg7'  name='book_img'>
    <img  src='{{ asset('User/images/post_images/'.$data->img7) }}'  width='100%' id='pic'/>
   <input type="file" name='img7' onchange='readImage(this)' />
</div>


           <div class="col-md-2 img" id='uimg8'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img8) }}'  width='100%' id='pic'/>
           <input type="file" name='img8' onchange='readImage(this)' />
       </div>


           <div class="col-md-2 img" id='uimg9'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img9) }}'  width='100%' id='pic'/>
           <input type="file" name='img9' onchange='readImage(this)' />
       </div>


           <div class="col-md-2 img" id='uimg10'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img10) }}'  width='100%' id='pic'/>
           <input type="file" name='img10' onchange='readImage(this)' />
       </div>


           <div class="col-md-2 img" id='uimg11'  name='book_img'>
            <img  src='{{ asset('User/images/post_images/'.$data->img11) }}'  width='100%' id='pic'/>
           <input type="file" name='img11' onchange='readImage(this)' />
       </div>


                      <div class="col-md-2 img" id='uimg12'  name='book_img'>
                <img  src='{{ asset('User/images/post_images/'.$data->img12) }}'  width='100%' id='pic'/>
               <input type="file" name='img12' onchange='readImage(this)' />
           </div>
                </div>

            </section>
            <!-- new UPLOAD code  -->

            <h5>CONFIRM YOUR LOCATION</h5>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">State</label>
                <select name="state" class="custom-select" required>
                    <option value="">Select..</option>
                    <option value="sindh" {{($data->state == 'sindh') ? 'chacked' : ''}} > Sindh</option>
                    <option value="punjab" {{($data->state == 'punjab') ? 'chacked' : ''}}>Punjab</option>
                    <option value="balochistan" {{($data->state == 'balochistan') ? 'chacked' : ''}}>Balochistan</option>
                    <option value="kpk" {{($data->state == 'kpk') ? 'chacked' : ''}}>KPK</option>


                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">City</label>
                <select name="city" class="custom-select" required>
                    <option value="">Select..</option>
                    <option value="karachi" {{($data->city == 'karachi') ? 'chacked' : ''}}>Karachi</option>
                    <option value="lahore"{{($data->city == 'lahore') ? 'chacked' : ''}}>lahore</option>
                    <option value="islambad"{{($data->city == 'islambad') ? 'chacked' : ''}}>Islamabad</option>
                    <option value="multan"{{($data->city == 'multan') ? 'chacked' : ''}}>Multan</option>


                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <h5 class="font-weight-bold">REVIEW YOUR DETAILS</h5>

            <div class="col-md-12 p-4 ">

                <div class="row">
                    <div class="col-md-12">

                        <img class="img" src="./images/profile img.png" alt=""> <br>
                    </div>
                    <div class="col-md-12">
                        <span class="name">Name</span>
                        <input class="form-control" type="text" value="{{$data->Postman_Name}}" name="postman_name" class="form-control" placeholder=""
                            aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>
            <br>
            <div>
                <span class="rvd">Your phone number </span>
                <span class="num3">+923102140740</span>
            </div>
            <br>
            <br>
            <div>
                <span class="ads "> <b> Show my phone number in ads </b></span>
                <div class="form-check form-switch check">
                    <input class="form-check-input " type="checkbox" value="1" {{($data->isPhone == '1') ? 'chacked' : ''}} name="is_mobile" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>
            </div>
            <hr>
            <br>
            <button type="submit" class="btn btn-primary">Submit Now</button>
            </form>
        </div>
    </div>
    </div>
    <!--================================
    START FOOTER AREA
=================================-->
    <footer class="footer-area pt-2">
        <!-- end /.footer-big -->
        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-6 text-left">
                                <div class="copyright-text">
                                    <p>
                                        <a href="#" style="font-weight: bold;">Other Countries </a>. India - South
                                        Africa - Indonesia
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-right">
                                <div class="copyright-text">
                                    <p>
                                        <a href="#" style="font-weight: bold;">Free Classifieds in Pakistan. </a>. ??
                                        2006-2021 OLX
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!--================================
END FOOTER AREA
=================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

    <script>
        function readImage(th)
    {  //alert('id');
        
    console.log(th.files)
        if(th.files && th.files[0])
        {
    reader = new FileReader();
    reader.onload = function (e){
    th.previousSibling.previousSibling.setAttribute('src',e.target.result);
    };
    
    reader.readAsDataURL(th.files[0]);
    }
    }
    </script> 
</body>

</html>