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
        <a href="/ads" style="color:black">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green">
              <img src="{{asset('assets/admin/dist/img/ads.png')}}" style="color:white" height="50px" width="50px" alt="">
              {{-- <i class="ion ion-ios-book"></i> --}}
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Total Ads</span>
              <span class="info-box-number">{{$count_ads}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
        <!-- /.col -->
        <a href="/users" style="color:black">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Users</span>
              <span class="info-box-number">{{$count_users}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </a>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <a href="/categorie" style="color:black">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i  class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Categories</span>
              <span class="info-box-number">{{$count_main_category}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
        <!-- /.col -->
        <a href="/sub_categorie" style="color: black">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow">
              <img src="{{asset('assets/admin/dist/img/sub_cat.svg')}}" style="" height="50px" width="50px" alt="">
                {{-- <i class="fa fa-user"></i> --}}
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Sub Categories</span>
              <span class="info-box-number">{{$count_sub_category}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
      <a href="/featured" style="color: black">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon" style="background: gold">
              <img src="{{asset('assets/admin/dist/img/featured.png')}}" style="margin-bottom:15%" height="70px" width="70px" alt="">

              {{-- <i  class="fa fa-list"></i> --}}
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Featured Ads</span>
              <span class="info-box-number">{{$count_featured_ads}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>

      <a href="/users1" style="color: black">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon" style="background:black">
              <img src="{{asset('assets/admin/dist/img/super-admin.png')}}" style="margin-bottom:15%" height="50px" width="50px" alt="">

              {{-- <i  class="fa fa-list"></i> --}}
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Super Admin</span>
              <span class="info-box-number">{{$count_featured_ads}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="col-md-12>
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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