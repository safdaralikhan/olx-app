

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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" style="font-size: 20px;" href="{{route('my-ads',session('id'))}}">ADS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" style="font-size: 20px; text-decoration:underline" href="favorites_ads">FAVORITES</a>
          </li>
        </ul>
      </nav>
      <br>
      <div class="container">
      <div class="row">

        @if ($favorites->count() > 0)
            
        @foreach($favorites as $item)
        <a href="/detail/{{$item->id}}">
         <div class="col-lg-4 col-md-6 parentDiv" id="p{{$item->id}}">
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
                     
             <a href="javascript:void(0)"><i class="fa fa-heart" id="dislike_favorite" data-id="{{$item->id}}" onclick="dislike('{{$item->id}}')"  style=" color:gold; font-size:25px;  float:right"></i></a>                                
              @else 
             
             <a href="/like_favorite/{{$item->id}}"><i class="fa fa-heart" id="like_favorite" style=" color:black; font-size:25px;  float:right"></i></a>                                 --}}
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
     </a>
     <!-- end /.col-md-4 -->
     @endforeach
     @else
     <center><h1><b style="color:red">NOT FOUND</b></h1><center>
     @endif

    
      </div>
    </div>

<!-- end /.row -->

<!-- end /.container -->
</section>
<!--================================
END PRODUCTS AREA
=================================-->












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

{{-- <script>
    $(document).ready(function(){

$(document).on("click", "#update_data", function() { 
    
    var url = "{{URL('/status/'.$item->id)}}";
    var id= 
    $.ajax({
        url: url,
        type: "GET",
        cache: false,
        success: function(dataResult){
            alert(dataResult);
         if(dataResult.statusCode)
         {
            window.location = "/userData";
         }
         else{
             alert("Internal Server Error");
         }
            
        }
    });

alert('func works');
}); 
});

</script> --}}
</body>
</html>

<script>

function dislike(id){


        $.ajax({
url:"{{url('/dislike_favorite')}}",
type:"get",
data:{
    id:id,
},success:function(data){
    if(data==2){

$('#p'+id).hide();
        // $('#p+').hide();
    }
}

        });
}

</script>
