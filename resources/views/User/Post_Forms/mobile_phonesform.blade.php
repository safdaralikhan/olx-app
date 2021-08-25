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

        /* .picbdr {
            border: 1px solid #333;
            padding: 20px;
            text-align: center;


        } */

        .img {
            float: left;
            width: 80px;
            height: 80px;
        }

        .rev {
            float: right;
        }

        /* .name {

        } */




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


        select {
            width: 595px;
            height: 45px;
        }

        span.h {
            line-height: 47px;
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
.radio-toolbar {
            margin: 10px;
        }

        .radio-toolbar input[type="radio"] {
            opacity: 0;
            position: fixed;
            width: 0;
        }

        .radio-toolbar label {
            display: inline-block;
            background-color: #ddd;
            padding: 10px 20px;
            font-family: sans-serif, Arial;
            font-size: 16px;
            border: 2px solid #444;
            border-radius: 4px;
        }

        .radio-toolbar label:hover {
            background-color: #dfd;
        }

        .radio-toolbar input[type="radio"]:focus+label {
            border: 2px dashed #444;
        }

        .radio-toolbar input[type="radio"]:checked+label {
            background-color: #6C757D;
            border-color: #6C757D;
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

    <h1 class="text-center">POST YOUR AD</h1>
    <div class="container">
        <div class="col-md-7 mx-auto mybred">

            <!-- breadcrumb start -->
            <h5>SELECTED CATEGORY</h5>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Animals</li>
                    <li class="breadcrumb-item">Accessories

                    </li>
                    <li class="breadcrumb-item active underline" aria-current="page"><a href="signup.html"> Change </a></li>
                </ol>
            </nav>
            <hr>
            <!-- breadcrumb END -->

            <div>
                <h5>INCLUDE SOME DETAILS</h5>
            </div>

            <form action="/post" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{{$data->id}}" name="subcat_id">
                <input type="hidden" value="{{$data->category_id}}" name="cat_id">
            <div class="mb-3 col-md-12">
                <label for="formGroupExampleInput" class="form-label">Ad title*</label>
                <input type="text" class="form-control" name="title" width="60%" id="formGroupExampleInput" placeholder="">
                <span class="adtitle">Mention the key features of your item (e.g. brand, model, age, type)</span>
                <span class="num1">0/70</span>
            </div>
            @csrf
            <div class="form-floating mb-3 mt-4 col-md-12">
                <span>Description*</span>
                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <span class="dscp">Include condition, features and reason for selling</span>
                <span class="num2">0 / 4096</span>
            </div>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <span>Make</span>
                    <select name="make">
                        <option>Select Company</option>
                        <option value="Acer">Acer</option>
                        <option value="Alcatel">Alcatel</option>
                        <option value="Apple iPhone">Apple iPhone</option>
                        <option value="BlackBerry">BlackBerry</option>
                        <option value="Calme">Calme</option>
                        <option value="Club">Club</option>
                        <option value="G'Five">G'Five</option>
                        <option value="Google">Google</option>
                        <option value="Gright">Gright</option>
                        <option value="Haier">Haier</option>
                        <option value="Honor">Honor</option>
                        <option value="HTC">HTC</option>
                        <option value="Huawei">Huawei</option>
                        <option value="iNew">iNew</option>
                        <option value="Infinix">Infinix</option>
                        <option value="Lava">Lava</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="LG">LG</option>
                        <option value="Meizu">Meizu</option>
                        <option value="Mobilink JazzX">Mobilink JazzX</option>
                        <option value="Motorola">Motorola</option>
                        <option value="Nokia">Nokia</option>
                        <option value="One Plus">One Plus</option>
                        <option value="oppo">oppo</option>
                        <option value="Panasonic">Panasonic</option>
                        <option value="QMobile">QMobile</option>
                        <option value="Realme">Realme</option>
                        <option value="RIVO">RIVO</option>
                        <option value="Samsung Mobile">Samsung Mobile</option>
                        <option value="Sony">Sony</option>
                        <option value="Tecno">Tecno</option>
                        <option value="Vivo">Vivo</option>
                        <option value="VOICE">VOICE</option>
                        <option value="Xiaomi">Xiaomi</option>
                    </select>




                </div>
            </div>

            <br>
            <div>

                <span>Condition*</span>
                <br>
                <div class="radio-toolbar">
                    <input type="radio" id="radioNew" name="type_of_cond" value="New" >
                    <label for="radioNew">New</label>
                    

                    <input type="radio" id="radioUsed" name="type_of_cond" value="Used">
                    <label for="radioUsed">Used</label>
               
            </div>
               
            </div>

            <hr>



            <h5>SET A PRICE</h5>
            <div class="col-md-12">
                <span>Price*</span>
                <div class="input-group flex-nowrap ">

                    <span class="input-group-text" id="addon-wrapping">RS</span>
                    <input type="text" class="form-control" name="price" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
            <hr>

            <h5>UPLOAD UP TO 12 PHOTOS</h5>




            <section>
                                   
                <div class="row">

                <div class="col-md-2 img" id='uimg1' name='book_img'>
                 <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic1'/>
                <input type="file" name='main_img' onchange='readImage(this)' required/>
            </div>


            <div class="col-md-2 img" id='uimg2' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img2' onchange='readImage(this)' required/>
           </div>

            <div class="col-md-2 img" id='uimg3' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img3' onchange='readImage(this)' required/>
           </div>

                     <div class="col-md-2 img" id='uimg4' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img4' onchange='readImage(this)' required/>
           </div>


           <div class="col-md-2 img" id='uimg5' name='book_img'>
            <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
           <input type="file" name='img5' onchange='readImage(this)' required/>
       </div>


       <div class="col-md-2 img" id='uimg6' name='book_img'>
        <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
       <input type="file" name='img6' onchange='readImage(this)' required/>
   </div>                      
</div>



                <div class="row py-4">
                     <div class="col-md-2 img" id='uimg7' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img7' onchange='readImage(this)' required/>
           </div>


                     <div class="col-md-2 img" id='uimg8' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img8' onchange='readImage(this)' required/>
           </div>


                     <div class="col-md-2 img" id='uimg9' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img9' onchange='readImage(this)' required/>
           </div>


                     <div class="col-md-2 img" id='uimg10' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img10' onchange='readImage(this)' required/>
           </div>


                    <div class="col-md-2 img" id='uimg11' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img11' onchange='readImage(this)' required/>
           </div>


                      <div class="col-md-2 img" id='uimg12'  name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img12' onchange='readImage(this)' required/>
           </div>
                </div>

            </section>
            <hr>
            <h5>CONFIRM YOUR LOCATION</h5>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">State</label>
                <select name="state" class="custom-select" required>
                    <option value="">Select..</option>
                    <option value="sindh">Sindh</option>
                    <option value="punjab">Punjab</option>
                    <option value="balochistan">Balochistan</option>
                    <option value="kpk">KPK</option>


                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">City</label>
                <select name="city" class="custom-select" required>
                    <option value="">Select..</option>
                    <option value="karachi">Karachi</option>
                    <option value="lahore">lahore</option>
                    <option value="islambad">Islamabad</option>
                    <option value="multan">Multan</option>


                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <hr>

            <!-- new UPLOAD code  -->

            <h5>REVIEW YOUR DETAILS</h5>

            <div class="col-md-12 p-4 ">

                <div class="row">
                    <div class="col-md-12">

                        <img class="img" src="./images/profile img.png" alt=""> <br>
                    </div>
                    <div class="col-md-12">
                        <span class="name">Name</span>
                        <input class="form-control" type="text" name="postman_name" class="form-control" placeholder=""
                            aria-label="Username" aria-describedby="addon-wrapping">


                    </div>
                </div>






            </div>

            <h4 class="h">Let's verify your account</h4>
            <span class="h">We will send you a confirmation code by sms on the next step.</span>
            <br>





            <br>
            <br>


            <div>
                <span class="ads "> <b> Show my phone number in ads </b></span>
                <div class="form-check form-switch check">
                    <input class="form-check-input " value="1" name="is_mobile" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>

            </div>
            <br>

            <br>
            <hr>
            <br>

            <button type="submit" class="btn btn-primary">Submit Now</button>
            <br>
            <br>
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
                                        <a href="#" style="font-weight: bold;">Free Classifieds in Pakistan. </a>. ©
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