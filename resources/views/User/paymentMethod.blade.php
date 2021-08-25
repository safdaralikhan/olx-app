

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
                <div class="container">
                            <h1 style="font-weight: 700; margin-top:3%">Payment Methods</h1>
                            <div class="form-group" style="border:1px solid #CCD5D6; border-radius:5px; height:75px; margin-top:3% ">

                                <h3 style="margin: 2%; font-weight: 500; float:left">Feature Ad for @if ($packageName == 'fifteenDay')
                                   15 
                                @else
                                   30 
                                @endif Days</h3>
                                <h3 style="margin: 2%; font-weight: 500; float:right">Rs: {{$payment}}</h3>
                            </div>

                            <div class="row">
                                
                                <div class="col-md-4">
                                    <form action="/striper" method="post">
                                        @csrf
                                    <div class="form-group" style="border:1px solid #CCD5D6; border-radius:5px; height:240px; margin-top:3% ">
                                        <input type="hidden" name="AdId" value="{{$Ad_Id}}">
                                        <input type="hidden" name="payment" value="{{$payment}}">
                                        <input type="hidden" name="packageName" value="{{$packageName}}">

                                        <i class="fa fa-credit-card" style="font-size:50px; margin-left:44%; margin-top:14%"></i>
                                        <h5 style="font-weight: 500; text-align:center; margin-top:4%">Card Payment</h5>
                                        <p style="text-align:center;">Pay with Visa, Mastercard, or JCB</p>
                                        <div class="row justify-content-center">
                                            <button class="btn-lg" style="background-color:#002F34; color:white; padding:0px" type="submit">Proceed</button>
                                        </div>                                    </div>
                                    
                                    </form>
                                </div>
                                

                                <div class="col-md-4">
                                    <div class="form-group" style="border:1px solid #CCD5D6; border-radius:5px; height:240px; margin-top:3% ">
                                        <i class="fa fa-credit-card" style="font-size:50px; margin-left:44%; margin-top:14%"></i>
                                        <h5 style="font-weight: 500; text-align:center; margin-top:4%">JazzCash Shop</h5>
                                        <p style="text-align:center;">Get a voucher and complete your payment at any JazzCash shop</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="border:1px solid #CCD5D6; border-radius:5px; height:240px; margin-top:3% ">
                                        <i class="fa fa-credit-card" style="font-size:50px; margin-left:44%; margin-top:14%"></i>
                                        <h5 style="font-weight: 500; text-align:center; margin-top:4%">JazzCash Mobile Account</h5>
                                        <p style="text-align:center;">JazzCash Mobile Account</p>
                                    </div>
                                </div>
                            </div>


                        </div>









                        
                    
                        <!-- end .login--form -->
                   
                    <!-- end .cardify -->
               
            <!-- end .col-md-6 -->
        
        <!-- end .row -->
    </div>
    <!-- end .container -->







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


