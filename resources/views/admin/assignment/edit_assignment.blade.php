    @extends('admin.master')

  @section('title')
  Edit Assignment
  @endsection
  @section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Assignment
        <small>All * field required</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
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
      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <form action="{{ route('update_assign',$assignment->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="status" value="1">
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
         
        
          <div class="row"> 
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="title">Title <span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$assignment->title}}">
                    </div>
 

                <div class="form-group">
                      <label for="author_img">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="author_img">
                    </div>

<div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter ...">{{$assignment->description}}</textarea>
                  </div>




<div class="form-group">
                      <label for="author_img">Documents<span class="text text-red">*</span></label>
                      <input type="file" name="documents" class="form-control" id="author_img">
                    </div>


 
                    
                    <div class="form-group">
                      <label>Package <span class="text text-red">*</span></label>
                      <select name="package" id="package" class="form-control select2" style="width: 100%;">
                        <option value="{{$assignment->package}}">{{$assignment->package}}</option>
                        <option value="Basic">Basic</option>
                        <option value="Standard">Standard</option>
                        <option value="premium">Premium</option>

                      </select>
                    </div>
 
                    <div class="form-group">
                      <label for="phone">Price</label>
                      <input type="number" name="price" class="form-control" id="price" value="{{$assignment->price}}"">
                    </div>
 
 


 <div class="row">
<div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Start Date</label>
                      <input type="date" name="startdate" class="form-control" id="date" value="{{$assignment->startdate}}">
                      </div>

</div>

<div class="col-md-6">

               <div class="form-group">
                      <label for="phone">Expiry Date</label>
                      <input type="date" name="expirydate" class="form-control" id="date" value="{{$assignment->expirydate}}">
                    </div>

</div>

                    
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