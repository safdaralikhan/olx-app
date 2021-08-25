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
                                
                              </tr>
                          </thead>
                          @foreach ($featured as $featured)
                              
                          
                          <tr>
                              <td>{{$Sno++}}</td>
                              <td>{{$featured->updated_at}}</td>
                              <td><a href="{{route('detail',$featured->id)}}"><img src="{{asset('User/images/post_images/'.$featured->main_img)}}" height="80px" width="100px" alt=""></a></td>
                              <td>{{$featured->title}}</td>
                              <td>{{$featured->price}}</td>
                              <td>{{$featured->condition}}</td>
                              <td>{{$featured->Postman_Name}}</td>
                              <td>
                                  @php
                                    $postman_email = DB::table('users')->
                                      where('id',$featured->user_id)->first();
                                  @endphp
                                  {{$postman_email->email}}
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