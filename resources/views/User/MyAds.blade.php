

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
<table class="table">
    <thead>
        <tr>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" style="font-size: 20px; text-decoration:underline" href="{{route('my-ads',session('id'))}}">ADS</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" style="font-size: 20px;" href="/favorites_ads">FAVORITES</a>
                  </li>
                </ul>
              </nav>

        </tr>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Ad image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @if ($MyAds->count() > 0)
            
        @foreach ($MyAds as $item)
        <tr>
        
            <td>{{$item->created_at}}</td>
            <td><a href="{{route('detail',$item->id)}}"><img src="{{asset('User/images/post_images/'.$item->main_img)}}" height="80px" width="100px" alt=""></a>
                <br>
                @php
                    $likes = DB::table('ad_likes_counters')
                    ->where('ad_id',$item->id)->count();
                @endphp
                <i class="fa fa-heart" > Likes:{{$likes}}</i> 
            </td>
            <td>{{$item->title}}</td>
            <td>{{$item->price}}</td>
            <td>
                @if ($item->status == 1)
                
                Active
                @else

                Deactive
                @endif
            </td>
            <td>                        <div class="filter__menu">
                
                <div class="filter__menu_icon">
                    <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="svg" style="width: 100%"  src="{{asset('User/images/svg/menu.svg')}}" alt="menu icon">
                    </a>
    
                    <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                        <li>
                            <a href="{{route('edit_ad',$item->id)}}">Edit</a>
                        </li>
                        <li>
                            <a href="{{route('delete_ad',$item->id)}}">Delete</a>
                        </li>

                        <li>
                            @if ($item->status == 1)
                
                            {{-- <a href="/status/{{$item->id,$item->status}}"  value="0" class="btn btn-warning">Active</a> --}}
                         <a href="{{route('status',['id'=>$item->id])}}" >Deactive</a>
                            @else
            
                            <a href="{{route('status',['id'=>$item->id])}}" >Active</a>
                            @endif
                        </li>
                        <li>
                            <a href="{{route('sell_fast',$item->id)}}">Sell faster now</a>
                        </li>

                    </ul>
                </div>
            </div></td>
          </tr>
        @endforeach
        @else
           <center><h1><b style="color:red">NOT FOUND</b></h1><center> 
        @endif
    </tbody>
  </table>

<!-- end /.row -->
</div>
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

