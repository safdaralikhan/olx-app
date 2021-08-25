    @extends('admin.master')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  @section('title')
  Create Package
  @endsection
  @section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Mail
        <small>All * field required</small>
      </h1>
    </section>
    @if (session('succ'))
    <div class="alert alert-success">
        {{ session('succ') }}
    </div>
@endif

    <!-- Main content -->
    <section class="content">





      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <form action="update_mail" method="post">
      @csrf
      
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
         
        {{$data}}
          <div class="row"> 
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="title">Host <span class="text text-red">*</span></label>
                      <input type="text" name="host" class="form-control" id="title" >
                    </div>
 
                    <div class="form-group">
                    <label for="title">Port <span class="text text-red">*</span></label>
                      <input type="text" name="port" class="form-control" id="title" >
                    </div>

                    <div class="form-group">
                    <label for="title">From Address <span class="text text-red">*</span></label>
                      <input type="text" name="from_address" class="form-control" id="title" >
                    </div>

                    <div class="form-group">
                    <label for="title">From Name <span class="text text-red">*</span></label>
                      <input type="text" name="from_name" class="form-control" id="title" >
                    </div>

                    <div class="form-group">
                    <label for="title">Encryption <span class="text text-red">*</span></label>
                      <input type="text" name="encryption" class="form-control" id="title" >
                    </div>

                    <div class="form-group">
                    <label for="title">Username <span class="text text-red">*</span></label>
                      <input type="text" name="username" class="form-control" id="title" >
                    </div>

                    <div class="form-group">
                    <label for="title">Password <span class="text text-red">*</span></label>
                      <input type="text" name="password" class="form-control" id="title" >
                    </div>










 
            
             

 
 
 
 





              
                  
                
            </div>
 
              <!-- row end -->
 
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
    
    
            <a type="reset" href="{{ route('show_assignment') }}" class="btn btn-danger">Cancel</a>
          </div>
      </div>
</form>
      <!-- /.box -->

      <!-- form end -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @endsection