<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:-webkit-radial-gradient(left,transparent 20%, hsla(73, 92%, 47%, 0.133) 20%, #2222 30%, transparent 30%, transparent),-webkit-radial-gradient(right,darkslategray 20%, #2222 20%, #2222 30%, darkslategray 30%, darkslategray); background-size:100% 100%;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                 <div style="height:auto; width:800px; border:solid black 1px; background-color:white">
                    <div class="header" style="height: 80px; background-color:#3A77FF">
                        <div class="">
                            <img src="https://surveygizmolibrary.s3.amazonaws.com/library/650261/Untitled11.png" width="760" height="80">
                        </div>
                    </div>
                    <div class="container">
                        <img src="https://surveygizmolibrary.s3.amazonaws.com/library/650261/ezgif_comoptimize.gif" class="pt-4" width="770" padding-top="20" alt="">
                        <div class="pt-2">
                            <h4><b>Grow Your Business with OLX!</b></h4>
                        </div>
                        <div>
                            Help your business reach its maximum potential by partnering up with Pakistan's No. 1 online marketplace! Promote your products & services to over 6 Million people every month across Pakistan. Please fill your details below:
                        </div>
                        <div>
                            <form action="{{route('business-process')}}" method="post">
                                <label for=""><b>Name</b></label>
                                <input type="text" name="name" style="width: 400px" required class="form-control" id="">
                                <br>
                                @csrf
                                <label for=""><b>Number</b></label>
                                <input type="number" name="number" style="width: 400px" required placeholder="03xxxxxxxxxx"  class="form-control" id="">
                                <br><br>
                                <label for=""><b>Category</b></label>
                                <select name="category" class="form-control" required style="width: 500px" id="">
                                    <option value="">--Please Select--</option>
                                    @foreach ($category as $item)
                                    <option value="{{$item->cat_name}}">{{$item->cat_name}}</option>
                                    @endforeach
                                    
                                </select>
                                <br><br>
                                <label for=""><b>Interested in</b></label>
                                <br>
                                <input type="checkbox" name="more_ads" value="interested" id="">  
                                  <label for=""> More Ads</label>

                                <br>
                                <input type="checkbox" name="featured_ads" value="interested" id="">   
                                 <label for=""> Featured Ads</label>
                                <br>
                                <input type="checkbox"  name="Other_Business_Upgrated" value="interested" id="">    
                                    <label for=""> Other Business Upgrated</label>
                                <br>
                                <input type="checkbox" name="advertising" value="interested" id="">    <label for=""> Advertising(Display Baner)</label>
                                <br><br>
                                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                <br>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <br><br>
</body>
</html>