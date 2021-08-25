@extends('admin.master')

@section('title')
Manage User
@endsection
@section('main-content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <h1>Users</h1>
              <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                                  
                                  <th>S/No</th>
                                  <th>Name</th>
                                  <th>E-mail</th>
                                  <th>Contact #</th>
                                  <th>Gender</th>
                                  <th>Address</th>
                                  <th>Role</th>
                                  <th>Image</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          @foreach ($Users as $users_list)
                              
                          
                          <tr>
                              <td>{{$Sno++}}</td>
                              <td>{{$users_list->name}}</td>
                              <td>{{$users_list->email}}</td>
                              <td>
                                  @if ($users_list->contact)
                                  {{$users_list->contact}}
                                  @else
                                      NOT ADDED
                                  @endif
                              </td>
                              <td>
                                  @if ($users_list->gender)
                                  {{$users_list->gender}}
                                  @else
                                      NOT ADDED
                                  @endif
                                  
                              </td>
                              <td>
                                  @if ($users_list->address)
                                  {{$users_list->address}}
                                  @else
                                      NOT ADDED
                                  @endif
                                  
                              </td>
                              <td>
                                  @if ($users_list->role == 3)
                                  SUPER ADMIN
                                  @elseif($users_list->role == 1)
                                  ADMIN
                                  @else
                                  USER
                                  @endif
                              </td>
                              <td>
                                  @if ($users_list->user_img)
                                  {{$users_list->user_img}}
                                  @elseif($users_list->avatar)
                                      <img src="{{$users_list->avatar}}" style="height:50px; width:50px" alt="">
                                  @else
                                      NOT ADDED
                                  @endif
                              </td>
                              <td>
                                <div class="dropdown">
                                    @if ($users_list->status == 1)
                                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Active
                                      </button>
                                    @else
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Deactive
                                      </button>
                                    @endif



                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <br>
                                      @if ($users_list->role == 1)
                                      <a class="dropdown-item" href="{{route('users-role',['id'=>$users_list->id])}}">User</a>
                                      @else
                                      <a class="dropdown-item" href="{{route('users-role',['id'=>$users_list->id])}}">Admin</a>
                                      @endif
                                      
                                      
                                      <br>
                                      @if ($users_list->status == 1)
                                      <a class="dropdown-item" href="{{route('users-status',['id'=>$users_list->id])}}">Deactive</a>
                                        
                                      @else
                                      <a class="dropdown-item" href="{{route('users-status',['id'=>$users_list->id])}}">Active</a>
                                      @endif
                                      
                                      
                                    </div>
                                  </div>
                              </td>

                          </tr>
                          @endforeach
                          </tr>
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