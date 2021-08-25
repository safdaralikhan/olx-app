<div class="footer-big py-4">
    <!-- start .container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="info-footer">
                       <h5 class="footer-title text--black" style="font-size: 14px; font-weight: bold; color: white;">POPULAR CATEGORIES</h5>
                   <ul style="padding-top: 5px;">

                        <li>
                            <a href="/cat_pro/{{$category[0]->id}}">{{$category[0]->cat_name}}</a>
                        </li>    
                        <li>
                            <a href="/cat_pro/{{$category[4]->id}}">{{$category[4]->cat_name}}</a>
                        </li>                                      
                        <li>
                            <a href="/cat_pro/{{$category[1]->id}}">{{$category[1]->cat_name}}</a>
                        </li>   
                        <li>
                            <a href="/cat_pro/{{$category[2]->id}}">{{$category[2]->cat_name}}</a>
                        </li>                                       
                    </ul>
                </div>
                <!-- end /.info-footer -->
            </div>
            <!-- end /.col-md-3 -->

            <div class="col-lg-2 col-md-2">
                <div class="info-footer">
                       <h5 class="footer-title text--black" style="font-size: 14px; font-weight: bold; color: white;">TRENDING SEARCHES</h5>
                   <ul style="padding-top: 5px;">
                    {{-- @foreach ($category as $item)
                    @foreach ($item->subcategory->take(2) as $sub) --}}
                    <li>
                        <a href="/cat_pro/{{$category[7]->id}}">{{$category[7]->cat_name}}</a>
                    </li> 
                    <li>
                        <a href="/cat_pro/{{$category[8]->id}}">{{$category[8]->cat_name}}</a>
                    </li> 
                    <li>
                        <a href="/subcat_pro/{{$category[10]->id}}">{{$category[10]->cat_name}}</a>
                    </li> 
                    <li>
                        <a href="/cat_pro/{{$category[11]->id}}">{{$category[11]->cat_name}}</a>
                    </li> 
                    {{-- @endforeach

                    @endforeach --}}


                    </ul>
                </div>
                <!-- end /.info-footer -->
            </div>

                 <div class="col-lg-2 col-md-2">
                <div class="info-footer">
                       <h5 class="footer-title text--black" style="font-size: 14px; font-weight: bold; color: white;">ABOUT US</h5>
                   <ul style="padding-top: 5px;">
                        <li>
                            <a href="#">About OLX Group</a>
                        </li>
                        <li>
                            <a href="#">OLX Blog</a>
                        </li>
                        <li>
                            <a href="https://help.olx.com.pk/hc/en-us/requests/new?ticket_form_id=2919199999999999">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('business')}}">OLX for Businesses</a>
                        </li>
                    </ul>
                </div>
                <!-- end /.info-footer -->
            </div>
             <div class="col-lg-3 col-md-3">
                <div class="info-footer">
                       <h5 class="footer-title text--black" style="font-size: 14px; font-weight: bold; color: white;">OLX</h5>
                   <ul style="padding-top: 5px;">
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Sitemap</a>
                        </li>
                        <li>
                            <a href="#">Legal & Privacy information</a>
                        </li>
                    </ul>
                </div>
                <!-- end /.info-footer -->
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="newsletter">
                     <h5 class="footer-title text--black" style="font-size: 14px; font-weight: bold; color: white;">FOLLOW US</h5>

                    <!-- start .social -->
                    <div class="social social--color--filled">
                        <ul style="padding-top: 8px;">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-play"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </li>
                        </ul>

                         <img src="images/appstore_2x.png" alt="" style=" margin-top: 15px; width: 100px;">
                         <img src="images/playstore_2x.png" alt="" style=" margin-top: 15px; width: 100px;">
                    </div> 
                </div>
                <!-- end /.newsletter -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</div>