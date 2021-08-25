  @extends('admin.master')

  @section('title')
  Manage Packages
  @endsection
  @section('main-content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1> Manage Packages </h1>
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
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <a class="btn btn-danger btn-xm"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger btn-xm"><i class="fa fa-eye-slash"></i></a>
                            <a class="btn btn-danger btn-xm"><i class="fa fa-trash"></i></a>
                            <a class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
                        </h3>
                        
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered" id="myTable">
                            <thead style="background-color: #F8F8F8;">
                                <tr>
                                    <th width="2"><input type="checkbox" name="" id="checkAll"></th>
                                    <th width="2">S/No</th>
                                    <th width="50">Title</th>
                                    <th width="10">Image</th>
                                    <th width="8">Package</th>
                                    <th width="8">Price</th>

                                    <th width="10">Status</th>
                                    <th width="15">Manage</th>
                                </tr>
                            </thead>
                            <?php
                            $sn = 1;

                            ?>
                            @foreach($assignments as $assignment )
                            <tr>
                                <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                                <td>{{ $sn++}}</td>
                                <td>{{  $assignment->title }}</td>
                                <td>
                  @if($assignment->image == 'No image')
                      <img src="/assets/admin/dist/img/No-image-found.jpg" width="60" class="img-thumbnail" alt="No Image found">
                  @else
                      <img src="/uploads/assignment/{{ $assignment->image }}" width="60" class="img-thumbnail" alt="{{ $assignment->title }}">
                  @endif
                  </td>
                                <td>{{ $assignment->package }}</td>
                                <td>{{ $assignment->price }}</td>


                               
                                
                                <td>
                                    
                                    <form method="post" action="">
                                    @csrf
                                  {{ method_field('put') }}
                                    @if($assignment->status == 1 )
                                    <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                                    @else
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                                    @endif
                                </form>
                                  
                                </td>
                                <td>
                                    <form action="{{ route('assignment_destroy',$assignment->id) }}" method="POST">
                                        @csrf
                                   @method('DELETE')
                                    <a href="{{ route('edit_assign', $assignment->id) }}" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit" ></i></a>
                                  
                                    <button class="btn btn-danger btn-flat btn-sm" onclick="return confirm('Are you sure You want to delete the assignment?')"> <i class="fa fa-trash-o"></i></button>
                                    </form>
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