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
      @foreach ($sub_categories as $sub_category)
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow">
              {{-- <i  class="fa fa-list"></i> --}}
              <img src="{{asset('assets/admin/dist/img/sub_cat.svg')}}" style="" height="50px" width="50px" alt="">

            </span>

          <div class="info-box-content">
            <span class="info-box-text">{{$sub_category->subcat_name}}</span>
            <span class="info-box-number"></span>
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