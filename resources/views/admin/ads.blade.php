@extends('admin.master')

@section('title')
Manage User
@endsection
@section('main-content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <h1>Ads</h1>
              <ol class="breadcrumb">
                  <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><a href="#">Tables</a></li>
                  <li class="active">Simple</li>
              </ol>
          </section>
          <!-- Main content -->
          <section class="content">
              <!-- /.row -->
              <div class="box">

                  <?php $Sno = 1 ?>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <table class="table table-bordered" id="myTable">
                          <thead style="background-color: #F8F8F8;">
                              <tr>
                                
                                <th>S.no</th>
                                <th>Date</th>
                                <th>Ad image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Condition</th>
                                <th>Postman Name</th>
                                <th>Postman Email</th>
                                <th>Status</th>
                              </tr>
                          </thead>
                          
                         
                          @foreach ($ads as $ads_list)
                              
                          
                          <tr>
                              <td>{{$Sno++}}</td>
                              <td>{{$ads_list->updated_at}}</td>
                              <td><a href="{{route('detail',$ads_list->id)}}"><img src="{{asset('User/images/post_images/'.$ads_list->main_img)}}" height="80px" width="100px" alt=""></a></td>
                              <td>{{$ads_list->title}}</td>
                              <td>{{$ads_list->price}}</td>
                              <td>{{$ads_list->condition}}</td>
                              <td>{{$ads_list->Postman_Name}}</td>
                              <td>
                                  {{-- {{$ads_list->user_id}} --}}
                                   @php
                                    $postman_email = DB::table('users')->
                                      where('id',$ads_list->user_id)->first();
                                  @endphp
                                  {{$postman_email->email}}
                                  {{-- {{$postman_email->email}}  --}}
                              </td>
                              <td>
                                <div class="dropdown">
                                    @if ($ads_list->status == 1)
                                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                        Active
                                    </button>
                                    @else
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                        Deactive
                                    </button>
                                    @endif

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="{{route('delete_ad',$ads_list->id)}}">Delete</a>
                                      <br>
                                      @if ($ads_list->status == 1)
                                      <a class="dropdown-item" href="{{route('status',['id'=>$ads_list->id , 'status'=>$ads_list->status])}}" value="0">Deactive</a>

                                      @else
                                      <a class="dropdown-item" href="{{route('status',['id'=>$ads_list->id , 'status'=>$ads_list->status])}}" value="1">Active</a>

                                      @endif
                                    </div>
                                  </div>
                              </td>
                          </tr>
                          @endforeach

                             


                          
                      </table>
                  </div>
                  <!-- /.box-body -->
                  
              </div>
              <!-- /.box-body -->
      </div>
      </section>
      <!-- /.content -->
  </div>
@endsection