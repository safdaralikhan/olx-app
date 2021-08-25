    <?php
    

    
    ?>
    @include('User.Layout.header')
        <!-- end  -->

        <!-- start .mainmenu_area -->
        {{-- @include('User.Layout.categories') --}}
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->
<!--Section: Block Content-->
<section class="mb-1">

    <div class="row">

      <div class="col-md-5 mb-4 mb-0 ">
  
        <div id="mdb-lightbox-ui"></div>
  
        <div class="mdb-lightbox">
  
          <div class="row product-gallery mx-1">
            
            <div class="col-12 mb-0">
                
                        <div style="width:100%; margin: 10px auto; background:#eee;"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" height="500" src="{{asset('User/images/post_images/'.$detail->main_img)}}" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100"  height="500" src="{{asset('User/images/post_images/'.$detail->img2)}}" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100"  height="500" src="{{asset('User/images/post_images/'.$detail->img3)}}" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100"  height="500" src="{{asset('User/images/post_images/'.$detail->img4)}}" alt="Second slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                    </div>
                </div>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="{{asset('User/images/post_images/'.$detail->img5)}}"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="{{asset('User/images/post_images/'.$detail->img6)}}"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="{{asset('User/images/post_images/'.$detail->img7)}}"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="{{asset('User/images/post_images/'.$detail->img8)}}"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h5>{{$detail->title}}</h5>
        <?php
      $sub_cat = DB::table('sub_categories')
        ->where('id',$detail->subcategory_id)->first();
        
        ?>
        <p class="mb-1 text-muted text-uppercase small">{{$sub_cat->subcat_name}}
          @if(session('user') != null)
          @if ($detail->user_id != session('id'))
          <a href="/load/{{$detail->id}}" class="btn-lg btn-primary" style="float: right;">Chat with Seller</a>
          @endif
          @else
          @if ($detail->user_id != session('id'))
          <a href="" data-toggle="modal" data-target="#loginModal" class="btn-lg btn-primary" style="float: right;">Chat with Seller</a>
          @endif
          @endif

      </p>
        {{-- <ul class="rating d-flex">
          <li>
            <i class="fa fa-star text-primary"></i>
          </li>
          <li>
            <i class="fa fa-star text-primary"></i>
          </li>
          <li>
            <i class="fa fa-star text-primary"></i>
          </li>
          <li>
            <i class="fa fa-star text-primary"></i>
          </li>
          <li>
            <i class="fa fa-star text-primary"></i>
          </li>
        </ul> --}}
        <p><span class="mr-1"><strong>Rs: {{$detail->price}}</strong></span></p>
        <hr>
            <span class="mr-2"><strong><h3 class="description font-weight-bold">Description</h3></strong></span>
        <p class="pt-1">{{$detail->description}}..</p>
            <hr>

        <div class="table-responsive">
          <table class="table table-sm table-borderless mb-0">
              <span><strong><h4 class="details font-weight-bold pb-3">Details</h4></strong></span>
            <tbody>
            @if($sub_cat->subcat_name == 'Tablets' || $sub_cat->subcat_name == 'Mobile Accessories' || $sub_cat->subcat_name == 'Spare Parts' ||
                $sub_cat->subcat_name == 'Other Home Appliances' || $sub_cat->subcat_name == 'Generator UPS & Power Solution' || $sub_cat->subcat_name == 'Computer & Accessories' ||
                $sub_cat->subcat_name == 'Tv - Video - Audio' || $sub_cat->subcat_name == 'Cameras & Accessories' || $sub_cat->subcat_name == 'Kitchen Appliances' ||
                $sub_cat->subcat_name == 'Accessories' || $sub_cat->subcat_name == 'Clothes' || $sub_cat->subcat_name == 'Footwear' || $sub_cat->subcat_name == 'Watches')

              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Type</strong></th>
                <td>{{$detail->type}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Condition</strong></th>
                <td>{{$detail->condition}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                <td>{{$detail->price}}</td>
              </tr>

              @elseif($sub_cat->subcat_name == 'Mobile Phones')

                            <tr>
                <th class="pl-0 w-25" scope="row"><strong>Make</strong></th>
                <td>{{$detail->make}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Condition</strong></th>
                <td>{{$detail->condition}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                <td>{{$detail->price}}</td>
              </tr>

              @elseif($sub_cat->subcat_name == 'Car')

            <th class="pl-0 w-25" scope="row"><strong>Year</strong></th>
                <td>{{$detail->year}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>KM's driven</strong></th>
                <td>{{$detail->KmDriven}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Make</strong></th>
                <td>{{$detail->make}}</td>
              </tr>
                          <th class="pl-0 w-25" scope="row"><strong>Fuel</strong></th>
                <td>{{$detail->fuel}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Registered in</strong></th>
                <td>{{$detail->Registered_In}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Condition</strong></th>
                <td>{{$detail->condition}}</td>
              </tr>
                            <tr>
                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                <td>{{$detail->price}}</td>
              </tr>

              @elseif($sub_cat->subcat_name == 'Buses, Vans & Trucks' || $sub_cat->subcat_name == 'Rickshaw & Chingchi' || $sub_cat->subcat_name == 'Other Vehicles' ||  $sub_cat->subcat_name == 'Tractors & Trailers' )
                </tr>
                    <th class="pl-0 w-25" scope="row"><strong>Year</strong></th>
                <td>{{$detail->year}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>KM's driven</strong></th>
                <td>{{$detail->KmDriven}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Condition</strong></th>
                <td>{{$detail->condition}}</td>
              </tr>
                            <tr>
                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                <td>{{$detail->price}}</td>
              </tr>

              @elseif($sub_cat->subcat_name == 'Land & Plots' || $sub_cat->subcat_name == 'Shops - Offices - Commercial Spaces')
                                </tr>
                    <th class="pl-0 w-25" scope="row"><strong>Type</strong></th>
                <td>{{$detail->type}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Area Unit</strong></th>
                <td>{{$detail->area_unit}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Area</strong></th>
                <td>{{$detail->area}}</td>
              </tr>
                            <tr>
                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                <td>{{$detail->price}}</td>
              </tr>
              @elseif($sub_cat->subcat_name == 'Online' || $sub_cat->subcat_name == 'Markiting' || $sub_cat->subcat_name == 'Advertising & PR'|| $sub_cat->subcat_name == 'Education'
              || $sub_cat->subcat_name == 'Customer Services'|| $sub_cat->subcat_name == 'Sales'|| $sub_cat->subcat_name == 'IT & Networking'|| $sub_cat->subcat_name == 'Hotel & Tourism'
              || $sub_cat->subcat_name == 'Clerical & Adminestration'|| $sub_cat->subcat_name == 'Human Resources' || $sub_cat->subcat_name == 'Accounting & Finance' || $sub_cat->subcat_name == 'Manufacturing'
              || $sub_cat->subcat_name == 'Medical' || $sub_cat->subcat_name == 'Domestic Staff' || $sub_cat->subcat_name == 'Part - Time' || $sub_cat->subcat_name == 'Other Jobs'
              )
            </tr>
                <th class="pl-0 w-25" scope="row"><strong>Type of ad</strong></th>
                <td>{{$detail->type_of_ad}}</td>
                </tr>
                <tr>
                <th class="pl-0 w-25" scope="row"><strong>Sallery period</strong></th>
                <td>{{$detail->sallery_period}}</td>
                </tr>
                <tr>
                <th class="pl-0 w-25" scope="row"><strong>Sallery from</strong></th>
                <td>{{$detail->sallery_from}}</td>
                </tr>
                        <tr>
                <th class="pl-0 w-25" scope="row"><strong>Sallery to</strong></th>
                <td>{{$detail->sallery_to}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Position type</strong></th>
                <td>{{$detail->position_type}}</td>
              </tr>
              @else

                                              </tr>
                    <th class="pl-0 w-25" scope="row"><strong>Condition</strong></th>
                <td>{{$detail->condition}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                <td>{{$detail->price}}</td>
              </tr>


                @endif
            </tbody>
          </table>
        </div>
        
       

      </div>
    </div>
  </section>


  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content ">
          <div class="modal-header border-bottom-0 p-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body p-0">
              <div class="row">
                  <div class="col-md-12 col-12">
                      <div class="form-title text-center">
                          <h4 class="py-1 font-weight-bold">LogIn</h4>
                      </div>
                  </div>
              </div>



              <div class="row p-1">
                  <div class="col-md-12 col-sm-12">
                      <a href="/auth/facebook"
                          class="btn btn-md btn-block omb_btn-facebook border border-dark">
                          <i class="fa fa-facebook"></i>
                          <span class="hidden-xx">Facebook</span>
                      </a>
                  </div>
              </div>
              
              <div class="row p-1">
                  <div class="col-md-12 col-sm-12">
                      <a href="/login/google"
                          class="btn btn-md btn-block omb_btn-google border border-dark">
                          <i class="fa fa-google-plus"></i>
                          <span class="hidden-xx">Google+</span>
                      </a>
                  </div>
              </div>

              <div class="row p-1">
                  <div class="col-md-12 col-sm-12">
                      <a href="{{route('loginForm')}}"
                          class="btn btn-md btn-block omb_btn-google border border-dark">
                          <span class="hidden-xs">Continue with Email</span>
                      </a>
                  </div>
              </div>

              <div class="row p-1">
                  <div class="col-md-12 col-sm-12">
                      <a href="contact.html"
                          class="btn btn-md btn-block omb_btn-google border border-dark">
                          <span class="hidden-xs">Continue with Number</span>
                      </a>
                  </div>
              </div>



          </div>
      </div>
  </div>
</div>
</div>
</div>
  <!--Section: Block Content-->


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
<!-- endinject -->
</body>
</html>