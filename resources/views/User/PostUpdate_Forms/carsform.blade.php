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

    <h1 class="text-center">POST YOUR AD</h1>
    <div class="container">
        <div class="col-md-7 mx-auto mybred">

            <!-- breadcrumb start -->
            <h5>SELECTED CATEGORY</h5>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Vehicles</li>
                    <li class="breadcrumb-item">Cars</li>
                    <li class="breadcrumb-item active underline" aria-current="page"><a href="signup.html"> Changes </a>
                    </li>
                </ol>
            </nav>
            <hr>
            <!-- breadcrumb END -->
            <h5>INCLUDE SOME DETAILS</h5>
            <form action="/update_ad/{{$data->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{{$data->id}}" name="subcat_id">
                <input type="hidden" value="{{$data->category_id}}" name="cat_id">

                
            <div class="mb-3 col-md-12">
                @csrf
                <label for="formGroupExampleInput" class="form-label">Ad title*</label>
                <input type="text" class="form-control" name="title" value="{{$data->title}}" width="60%" id="formGroupExampleInput" placeholder="">
                <span class="adtitle">Mention the key features of your item (e.g. brand, model, age, type)
                </span>
                <span class="num1">0/70</span>
            </div>

            <div class="form-floating mb-3 mt-4 col-md-12">
                <span>Description*</span>
                <textarea class="form-control" placeholder="" name="description" id="floatingTextarea2" style="height: 100px">{{$data->description}}</textarea>
                <span class="dscp">
                    Include condition, features and reason for selling
                </span>
                <span class="num2">0 / 4096</span>
            </div>

            <div class="mb-3 col-md-12">
                <label for="formGroupExampleInput" class="form-label">Year</label>
                <input type="number" class="form-control" value="{{$data->year}}" name="year" width="60%" id="formGroupExampleInput"
                    required="This field is required" placeholder="">

            </div>

            <div class="mb-3 col-md-12">
                <label for="formGroupExampleInput" class="form-label">KM's driven</label>
                <input type="number" class="form-control" {{$data->KmDriven}} name="KmDriven" width="60%" id="formGroupExampleInput"
                    required="This field is required" placeholder="">

            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Make</label>
                <select class="custom-select" name="make" required>
                    <option value="">Select..</option>
                    <option value="audi" {{($data->make == 'audi') ? 'Selected' : ''}}>Audi</option>
                    <option value="Bmw" {{($data->make == 'Bmw') ? 'Selected' : ''}}>BMW</option>
                    <option value="KIA" {{($data->make == 'KIA') ? 'Selected' : ''}}>KIA</option>
                    <option value="FAW" {{($data->make == 'FAW') ? 'Selected' : ''}}>FAW</option>
                    <option value="HONDA" {{($data->make == 'HONDA') ? 'Selected' : ''}}>HONDA</option>
                    <option value="HYUNDAI" {{($data->make == 'HYUNDAI') ? 'Selected' : ''}}>HYUNDAI</option>
                    <option value="NISSAN" {{($data->make == 'NISSAN') ? 'Selected' : ''}}>NISSAN</option>
                    <option value="LEXUS" {{($data->make == 'LEXUS') ? 'Selected' : ''}}>Lexus</option>
                    <option value="MAZDA" {{($data->make == 'MAZDA') ? 'Selected' : ''}}>Mazda</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>


            <div class="mb-4 mt-4">
                <span>Fuel</span> <br>
                <span><label for="">CNG</label><input type="radio" value="CNG"  {{($data->fuel == 'CNG') ? 'Checked' : ''}}  name="fuel" id=""></span>
                <span><label for="">Diesel</label><input type="radio" value="Diesel" {{($data->fuel == 'Diesel') ? 'Checked' : ''}} name="fuel" id=""></span>
                <span><label for="">Hybrid</label><input type="radio" value="Hybrid"  {{($data->fuel == 'Hybrid') ? 'Checked' : ''}} name="fuel" id=""></span>
                <span><label for="">Petrol</label><input type="radio" value="Petrol"  {{($data->fuel == 'Petrol') ? 'Checked' : ''}} name="fuel" id=""></span>
            </div>


            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Registered in</label>
                <select class="custom-select" name="registered_in" required>
                    <option value="">Select..</option>
                    <option value="Karachi" {{($data->Registered_In == 'Karachi') ? 'Selected' : ''}}>Karachi</option>
                    <option value="Lahore" {{($data->Registered_In == 'Lahore') ? 'Selected' : ''}}>Lahore</option>
                    <option value="Islambad" {{($data->Registered_In == 'Islambad') ? 'Selected' : ''}}>Islamabad</option>
                    <option value="Punjab" {{($data->Registered_In == 'Punjab') ? 'Selected' : ''}}>Punjab</option>
                    <option value="Multan" {{($data->Registered_In == 'Multan') ? 'Selected' : ''}}>Multan</option>
                    <option value="Hyderabad" {{($data->Registered_In == 'Hyderabad') ? 'Selected' : ''}}>Hyderabad</option>

                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div>
                <span>Condition*</span>
                <br>
                <span><label for="">New</label> <input type="radio" value="New" {{($data->condition == 'New') ? 'checked' : ''}} name="condition" id=""></span>
                <span><label for="">Used</label> <input type="radio" value="Used" {{($data->condition == 'Used') ? 'checked' : ''}} name="condition" id=""></span>
            </div>
            <hr>

            <h5>SET A PRICE</h5>
            <div class="col-md-12">
                <span>Price*</span>
                <div class="input-group flex-nowrap ">

                    <span class="input-group-text" id="addon-wrapping">RS</span>
                    <input type="text" class="form-control" value="{{$data->price}}" name="price" placeholder="" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
            </div>
            <hr>


            <h5>UPLOAD UP TO 12 PHOTOS</h5>




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
            <hr>

            <h5>CONFIRM YOUR LOCATION</h5>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">State</label>
                <select name="state" class="custom-select" required>
                    <option value="">Select..</option>
                    <option value="sindh" {{($data->state == 'sindh') ? 'Selected' : ''}}>Sindh</option>
                    <option value="punjab" {{($data->state == 'punjab') ? 'Selected' : ''}}>Punjab</option>
                    <option value="balochistan" {{($data->state == 'balochistan') ? 'Selected' : ''}}>Balochistan</option>
                    <option value="kpk" {{($data->state == 'kpk') ? 'Selected' : ''}}>KPK</option>


                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">City</label>
                <select class="custom-select" name="city" required>
                    <option value="">Select..</option>
                    <option value="Karachi" {{($data->city == 'Karachi') ? 'Selected' : ''}}>Karachi</option>
                    <option value="Lahore" {{($data->city == 'Lahore') ? 'Selected' : ''}}>lahore</option>
                    <option value="Islambad" {{($data->city == 'Islambad') ? 'Selected' : ''}}>Islamabad</option>
                    <option value="Multan" {{($data->city == 'Multan') ? 'Selected' : ''}}>Multan</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <hr>


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
                    <input type="checkbox" class="form-check-input" value="1"  name="is_mobile" id="flexSwitchCheckChecked" >
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>

            </div>

            <br>

            <hr>

            <button type="submit" class="btn btn-primary">Post Now</button>
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
                                                <a href="#" style="font-weight: bold;">Other Countries </a>. India -
                                                South
                                                Africa - Indonesia
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 text-right">
                                        <div class="copyright-text">
                                            <p>
                                                <a href="#" style="font-weight: bold;">Free Classifieds in Pakistan.
                                                </a>. ??
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