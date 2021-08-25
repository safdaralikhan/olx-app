<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLX</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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

    <h1 class="text-center">POST YOUR AD</h1>
    <div class="container">
        <div class="col-md-7 mx-auto mybred">

            <!-- breadcrumb start -->
            <h5>SELECTED CATEGORY</h5>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">jobs</li>
                    <li class="breadcrumb-item">online jobs

                    </li>
                    <li class="breadcrumb-item active underline" aria-current="page"><a href=""> Change </a></li>
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

            <div class="form-floating mb-3 mt-4 col-md-12">
                <span>Description*</span>
                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <span class="dscp">Include condition, features and reason for selling</span>
                <span class="num2">0 / 4096</span>
            </div>

            <div class="mb-4 mt-4">
                <span>type of ad</span> <br>
 
                <div class="radio-toolbar">
                    <input type="radio" id="radioApple" name="type_of_ad" value="CVs & Resumes" >
                    <label for="radioApple">CVs & Resumes</label>

                    <input type="radio" id="radioBanana" name="type_of_ad" value="Job offer">
                    <label for="radioBanana">Job offer</label>

                </div>
            </div>

            <div>

                <span>Salary period</span>
                <br>
                <div class="radio-toolbar">
                    <input type="radio" id="radiomix" name="sellery_period" value="Hourly" checked>
                    <label for="radiomix">Hourly</label>

                    <input type="radio" id="radiofruit" name="sellery_period" value="Monthly">
                    <label for="radiofruit">Monthly</label>

                    <input type="radio" id="radiosabs" name="sellery_period" value="Weekly">
                    <label for="radiosabs">Weekly</label>
                    <input type="radio" id="radiomaza" name="sellery_period" value="Yearly">
                    <label for="radiomaza">Yearly</label>
                </div>

                <div class="mb-3 col-md-12">
                    <label for="formGroupExampleInput" class="form-label">Salary form</label>
                    <input type="number" class="form-control" name="sallery_from" width="60%" id="formGroupExampleInput" placeholder="">

                </div>

                <div class="mb-3 col-md-12">
                    <label for="formGroupExampleInput" class="form-label">Salary to</label>
                    <input type="number" class="form-control" width="60%" name="sallery_to" id="formGroupExampleInput" placeholder="">

                </div>

                <span>position type</span>
                <br>
                <div class="radio-toolbar">
                    <input type="radio" id="radiotrac" name="position_type" value="Contract">
                    <label for="radiotrac">contract</label>
                    <input type="radio" id="radiofull" name="position_type" value="Full time">
                    <label for="radiofull">Full-time</label>

                    <input type="radio" id="radiopart" name="position_type" value="Part time">
                    <label for="radiopart">part-time</label>
                    <input type="radio" id="radiotemp" name="position_type" value="Temprorey">
                    <label for="radiotemp">Temprorey</label>
                </div>

                
                <hr>

                <h5>UPLOAD UP TO 12 PHOTOS</h5>




                <section>
                                   
                    <div class="row">
    
                    <div class="col-md-2 img" id='uimg1' name='book_img'>
                     <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic1'/>
                    <input type="file" name='main_img' onchange='readImage(this)'/>
                </div>
    
    
                <div class="col-md-2 img" id='uimg2' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img2' onchange='readImage(this)'/>
               </div>
    
                <div class="col-md-2 img" id='uimg3' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img3' onchange='readImage(this)'/>
               </div>
    
                         <div class="col-md-2 img" id='uimg4' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img4' onchange='readImage(this)'/>
               </div>
    
    
               <div class="col-md-2 img" id='uimg5' name='book_img'>
                <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
               <input type="file" name='img5' onchange='readImage(this)'/>
           </div>
    
    
           <div class="col-md-2 img" id='uimg6' name='book_img'>
            <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
           <input type="file" name='img6' onchange='readImage(this)'/>
       </div>                      
    </div>
    
    
    
                    <div class="row py-4">
                         <div class="col-md-2 img" id='uimg7' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img7' onchange='readImage(this)'/>
               </div>
    
    
                         <div class="col-md-2 img" id='uimg8' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img8' onchange='readImage(this)'/>
               </div>
    
    
                         <div class="col-md-2 img" id='uimg9' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img9' onchange='readImage(this)'/>
               </div>
    
    
                         <div class="col-md-2 img" id='uimg10' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img10' onchange='readImage(this)'/>
               </div>
    
    
                        <div class="col-md-2 img" id='uimg11' name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img11' onchange='readImage(this)'/>
               </div>
    
    
                          <div class="col-md-2 img" id='uimg12'  name='book_img'>
                    <img  src='{{ asset('User/images/camera.png') }}'  width='100%' id='pic'/>
                   <input type="file" name='img12' onchange='readImage(this)'/>
               </div>
                    </div>
    
                </section>
                <hr>
                <h5>CONFIRM YOUR LOCATION</h5>
                <div class="row">
                  <div class="col-md-12">
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
                    </div>
                </div>
                </div>

                <hr>




                <!-- new UPLOAD code  -->

                <h5>REVIEW YOUR DETAILS</h5>

                <div class="col-md-12 p-4 ">

                    <div class="row">
                        <div class="col-md-12">

                            <img class="img" src="profile img.png" alt=""> <br>
                        </div>
                        <div class="col-md-12">
                            <span class="name">Name</span>
                            <input class="form-control" type="text" name="postman_name" class="form-control" placeholder=""
                            aria-label="Username" aria-describedby="addon-wrapping">


                        </div>
                    </div>






                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <span class="rvd">Mobile phone number </span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+92</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>

                    </div>
                </div>



                <br>
                <br>


                <div>
                    <span class="ads "> <b> Show my phone number in ads </b></span>
                    <div class="form-check form-switch check">
                        <input class="form-check-input " type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>

                </div>
                <br>

                <br>
                <hr>
                <br>

                <button type="submit" class="btn btn-primary">Submit Now</button>
                <br><br>
            </form>


            </div>



        </div>
    </div>
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