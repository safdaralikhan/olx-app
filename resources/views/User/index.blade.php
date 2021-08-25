<?php
use Carbon\Carbon;


?>

            @include('User.Layout.header')
            
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            @include('User.Layout.categories')
                            
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
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

    <!--================================
    START HERO AREA
=================================-->

@include('User.Layout.baner')
<h3 class="text-center bg-success text-white">{{session('ad_added')}}</h3>
    <!--================================
    START FEATURE AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
<style>
    .page-link,.page-item .page-link,.pika-lendar button,.pika-lendar .pika-button,.handsontable th{max-width:120px;line-height:32px;background:-webkit-linear-gradient(75deg,black,#6a7274);color:#222;text-align:center; font-weight:800;white-space:nowrap;color:white;}.handsontable thead th{padding:0px 52px 0px 12px;}.handsontable th.active{background-color:#557;}
.page-link,.page-item .page-link{padding:0px 18px 0px 18px;}
.page-item.active .page-link{
background: black;
}
</style>
    <section class="products py-0">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12 mt-4">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Newest Release Products</h2>
                        </div>

                        <div class="filter__menu">
                            <p>Filter by:</p>
                            <div class="filter__menu_icon">
                                <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="svg" src="{{asset('User/images/svg/menu.svg')}}" height="300px" width="200px" alt="menu icon">
                                </a>

                                <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                                    <li>
                                        <a href="{{route('allads-filter')}}">All ads</a>
                                    </li>
                                    <li>
                                        <a href="{{route('featured-filter')}}">Featured ads</a>
                                    </li>
                                    <li>
                                        <a href="{{route('lowprice-filter')}}">Low price</a>
                                    </li>
                                    <li>
                                        <a href="{{route('highprice-filter')}}">High price</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
          
            <!-- end /.row -->

            <!-- start .row -->
            <h2 class="text-center text-danger">{{session('blockMsg')}}</h2>
            <div class="row">
                <!-- start .col-md-4 -->
                @if (isset($sub_cat))
                   @foreach($sub_cat as $item)
                   <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>
                                <?php
                                $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                            ?>
        
                            @if ($is_liked)
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    
        
                            @else
        
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                            
        
                            @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach
 
                @elseif(isset($cat))
                @foreach($cat as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>
                                <?php
                                $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                            ?>
        
                            @if ($is_liked)
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    
        
                            @else
        
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                            
        
                            @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach

                @elseif(isset($featured_filter))
                @foreach($featured_filter as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>
                                <?php
                        $is_liked = DB::table('ad_likes_counters')
                        ->where('ad_id',$item->id)
                        ->where('user_id',session('id'))->first();
                    ?>

                    @if ($is_liked)
                    <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                    <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    

                    @else

                    <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                    <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                    

                    @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach

                @elseif(isset($lowprice_filter))
                @foreach($lowprice_filter as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>
                                <?php
                                $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                            ?>
        
                            @if ($is_liked)
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    
        
                            @else
        
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                            
        
                            @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach

                @elseif(isset($highprice_filter))
                @foreach($highprice_filter as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>
                                <?php
                                $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                            ?>
        
                            @if ($is_liked)
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    
        
                            @else
        
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                            
        
                            @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach

                @elseif(isset($allads_filter))
                @foreach($allads_filter as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>

                        
                        <?php
                        $is_liked = DB::table('ad_likes_counters')
                        ->where('ad_id',$item->id)
                        ->where('user_id',session('id'))->first();
                    ?>

                    @if ($is_liked)
                    <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                    <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    

                    @else

                    <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                    <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                    

                    @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach

                @elseif(isset($post_search))
                    @foreach($post_search as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="col-lg-4 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card">
                            
                            
                            <div class="product__thumbnail">
                                @if ($item->is_featured == 'Featured')
                                
                                    <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                                
                                @endif
    
    
                                <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">
    
                            </div>
                        </a>
    
                        
                            <!-- end /.product__thumbnail -->
                            <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                            <div class="product-desc" >
                                <a href="#" class="product_title">
                                    <h4>Rs: {{$item->price}}</h4>
                                </a>
                                <?php
                              $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                            ?>

                            @if ($is_liked)
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    

                            @else
                          
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                           
                          
                            @endif
                              
    
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    
                                    <p>
                                        {{-- <span class="lnr lnr-heart"></span> 90</p> --}}
    
                                        <span>{{$item->city}}</span>
                                </div>
                                <div class="sell">
                                    <p>
                                    
                                        <span>{{$item->updated_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.single-product -->
                    </div>
                </a>
                <!-- end /.col-md-4 -->
                @endforeach
                @elseif(isset($city_search))
                @foreach($city_search as $item)
            <a href="/detail/{{$item->id}}">
                <div class="col-lg-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">
                        
                        
                        <div class="product__thumbnail">
                            @if ($item->is_featured == 'Featured')
                            
                                <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                            
                            @endif


                            <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">

                        </div>
                    </a>

                    
                        <!-- end /.product__thumbnail -->
                        <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                        <div class="product-desc" >
                            <a href="#" class="product_title">
                                <h4>Rs: {{$item->price}}</h4>
                            </a>


                                <?php
                                $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                                ?>

                                @if ($is_liked)
                                <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                                <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    

                                @else

                                <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                                <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    


                                @endif
                          

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                
                                <p>
                                    {{-- <span class="lnr lnr-heart"></span> 90</p> --}}

                                    <span>{{$item->city}}</span>
                            </div>
                            <div class="sell">
                                <p>
                                
                                    <span>{{$item->updated_at->diffForHumans()}}</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
            </a>
            <!-- end /.col-md-4 -->
            @endforeach
                @else 
                @foreach($post as $item)
              
                <a href="/detail/{{$item->id}}">
                <div class="col-lg-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">
                        
                        
                        <div class="product__thumbnail">
                            @if ($item->is_featured == 'Featured')
                            
                                <span style="background: gold; color:white; font-weight:800; position:absolute; left:0; top:0; padding:3px; ">Featured</span>
                            
                            @endif


                            <img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="300px" width="200px" alt="Product Image">

                        </div>
                    </a>

                    
                        <!-- end /.product__thumbnail -->
                        <div @if ($item->is_featured == 'Featured') style="border-left: gold 4px solid;border-bottom: gold 4px solid; border-bottom-left-radius:15px" @endif>
                        <div class="product-desc" >
                            <a href="#" class="product_title">
                                <h4>Rs: {{$item->price}}</h4>
                            </a>
                            <?php
                              $is_liked = DB::table('ad_likes_counters')
                                ->where('ad_id',$item->id)
                                ->where('user_id',session('id'))->first();
                            ?>

                            @if ($is_liked)
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px; display:none;  float:right"></i></a>                    

                            @else
                          
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike{{$item->id}}" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px; display:none;  float:right"></i></a>                    
                            <a href="javascript:void(0)"><i class="fa fa-heart" id="like{{$item->id}}" data-id="{{$item->id}}" onclick="like('{{$item->id}}')"  style=" color:black; font-size:25px;  float:right"></i></a>                    
                           
                          
                            @endif
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                
                                <p>
                                    {{-- <span class="lnr lnr-heart"></span> 90</p> --}}

                                    <span>{{$item->city}}</span>
                            </div>
                            <div class="sell">
                                <p>
                                
                                    <span>{{$item->created_at->diffForHumans()}}</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                
                <!-- end /.col-md-4 -->
                @endforeach
                <div class="container">
                <div class="row">
                
                    <div class="col-md-12">

                        <span>{{$post->links()}}</span>
                    </div>
                </div>
            </div>
                
                @endif
               <h1>{{session('modal')}}</h1> 
           
            </div>
            

            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END PRODUCTS AREA
=================================-->
              



  


   

   
  
    <section>
        <div class="container">
        <div class="row">
            <div class="col-lmd-1 "></div>
            <div class="col-md-4 ">
                <img src="{{asset('User/images/phone-app.png')}}" alt="">
            </div>
            <div class="col-md-3 ">
                <h1 style="font-weight: bold; margin-top: 10px;">TRY THE OLX APP</h1><br>
                <p>Buy, sell and find just about anything using the app on your mobile.</p>
            </div>
            <div class="col-md-4 ">
                <h5 style="font-weight: bold;  margin-top: 40px;">GET YOUR APP TODAY</h5>
                <img src="{{asset('User/images/appstore_2x.png')}}" alt="" style=" margin-top: 15px;">
                  <img src="{{asset('User/images/playstore_2x.png')}}" alt="" style=" margin-top: 15px;">
            </div>
                </div>
            </div>
        
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

    <style class=" text-center">
        .w-5
        {
            display:none;
        }
        p.text-sm.text-gray-700.leading-5 {
display: none;
}

    </style>
</body>
</html>

<script>


function dislike(id){

$.ajax({
url:"{{url('/dislike')}}",
type:"get",
data:{
id:id,
},success:function(data){
    
if(data==2){
    $('#dislike'+id).hide();
    $('#like'+id).show();

}
}

});
}



function like(id){
    $.ajax({
url:"{{url('/like')}}",
type:"get",
data:{
id:id,
},success:function(data){
    console.log(data);
if(data==1){

    $('#like'+id).hide();
$('#dislike'+id).show();

}
}

});
        
}



    </script>

@if(session('modal') == 3 || session('modal') == 1 )
<script>
$(function() {
    
    $('#loginModal').modal('show');
});
</script>
@endif

