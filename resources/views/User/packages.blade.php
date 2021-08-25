

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

 
                      
 


<!-- end /.container -->
</section>
<!--================================
END PRODUCTS AREA
=================================-->





<section class="login_area section--padding2" style="background-color: darkslategray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                    <div class="cardify login">
                        <div class="login--header">
                            <img src="{{asset('User/images/fetureTag.webp')}}" height="130px"  alt="">
                            <h4 style="font-weight: 700; padding-top: 30px;">REACH MORE BUYERS AND SELL FASTER</h4>
                            <p>Upgrade your Ad to a top position</p>
                        </div>
                        
                        <!-- end .login_header -->
                        <form action="{{route('payment_methods')}}" method="post">
                            <input type="hidden" name="itemId" value="{{$sell_fast->id}}">
                            @csrf
                        <div class="login--form">
                            <div class="form-group" style="border:1px solid #999; height:90px; ">
                              <input type="radio" name="package" value="{{$fifteenDaysPackage}}" style="margin-left:10px; display:inline-block; height:20px; width:20px; margin:20px; background:black; float:left;" id="fifteenDaysPackage">
                              <span style="float: left; margin-top:18px;">  <h6>Feature Ad for 15 Days</h6></span>
                              <span style="float: left; margin-top:18px; margin-left:50px;">  <h6>Rs: {{$fifteenDaysPackage}}</h6></span>

                            </div>

                            <div class="form-group" style="border:1px solid #999; height:90px; ">
                                <input type="radio" name="package" value="{{$thirtyDaysPackage}}" style="margin-left:10px; display:inline-block; height:20px; width:20px; margin:20px; background:black; float:left;" id="thirtyDaysPackage">
                                <span style="float: left; margin-top:18px;">  <h6>Feature Ad for 30 Days</h6></span>
                                <span style="float: left; margin-top:18px; margin-left:50px;">  <h6>Rs: {{$thirtyDaysPackage}}</h6></span>
  
                              </div>



                <button type="submit" name="btn"   class="btn btn--md btn--round" id="payBtn" style="display: none;" 
                                style="background-color:#2F4F4F;">
                                pay <span id="payFifteenBtn" >{{$fifteenDaysPackage}}</span>
                                <span id="payThirtyBtn" >{{$thirtyDaysPackage}}</span>
                            </button>




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

</body>
</html>


<script>
$(document).ready(function(){
    $("#fifteenDaysPackage").change(function(){
        $("#payFifteenBtn").fadeIn(2000);
        $("#payThirtyBtn").hide();
        $("#payBtn").show();
        $("#payBtn").val('fifteenDay');

    });

    $("#thirtyDaysPackage").change(function(){
        $("#payThirtyBtn").fadeIn(2000);
        $("#payFifteenBtn").hide();
        $("#payBtn").show();
        $("#payBtn").val('thirtyDay');
    });
});

</script>