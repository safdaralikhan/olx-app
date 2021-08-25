@extends('admin.master')

@section('title')
Dashboard
@endsection
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 960px;">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">

      <!-- /.col -->

      <!-- /.col -->

      <!-- fix for small devices only -->
      @foreach ($categories as $category)
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12" id="div{{$category->id}}">
        <div class="info-box">
          <span class="info-box-icon bg-orange"><i  class="fa fa-list"></i></span>

          <div class="info-box-content">
            <span class="info-box-text" id="catName{{$category->id}}">{{$category->cat_name}}</span>
            <form method="POST" action="/update_cat/{{$category->id}}" id="updateForm{{$category->id}}" style="display: none;">
              <input type="text" name="cat_name" id="cat_name">
              @csrf
              <button type="submit"  class="btn btn-warning">update</button>
            </form>
            <span class="info-box-number"></span>




             
              <div class="filter__menu_icon" style="float: right;">
                  <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="svg" src="{{asset('User/images/svg/menu.svg')}}" height="20px" width="20px" alt="menu icon">
                  </a>
    
                  <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                      <li>
                          <a href="#" id="editForm{{$category->id}}" onclick="editForm({{$category->id}})">Edit</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" id="delete{{$category->id}}" data-id="{{$category->id}}" onclick="deleteCat('{{$category->id}}')">Delete</a>
                      </li>
                      <li>
                          <a href="#">Active</a>
                          <a href="#">Deactive</a>
                      </li>
                  </ul>
              </div>
          
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->





      </div>
      <!-- /.col -->
      @endforeach




      <!-- /.col -->
    </div>
    <!-- /.row -->





    <!-- Main row -->
    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
<script src="{{asset('assets/admin/jquery.js')}}"></script>

<script>
  

    function deleteCat(id){
      confirm("are you sure?")
      {
        $.ajax({
          url:'/deleteCat/'+id,
          type:'get',
          success:function(result)
          {
            
            alert('Category Deleted Successfully!');
            $("#div"+id).remove();
          }
        });

      }

      }

     function editForm(id)
     {
        
          $("#updateForm"+id).show();
          $("#catName"+id).hide();
        
     }

     $(document).ready(function(){
        $("#updateForm")
     });
  
</script>