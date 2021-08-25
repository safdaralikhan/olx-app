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
                                </tr>
                            </thead>
                            @foreach ($users as $users_list)
                                
                            
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
                                    @if ($users_list->role == 0)
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

                                </td>

                            </tr>
                            @endforeach
                               

                                <td>

                                </td>
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