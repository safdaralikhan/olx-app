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
        Create Package
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
      <form action="{{route ( 'store_assignment' ) }}" method="post" enctype="multipart/form-data">
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
                     
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
               
          @error('title')
     <p class="help-block" style="color: red">{{$errors->first('title')}} 
                                            </p>
    @enderror
                    </div>
 

                <div class="form-group">
                      <label for="author_img">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="author_img">
             
          @error('image')
     <p class="help-block" style="color: red">{{$errors->first('image')}} 
                                            </p>
    @enderror
                    </div>

<div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter ..."></textarea>
                       @error('description')
     <p class="help-block" style="color: red">{{$errors->first('description')}} 
                                            </p>
    @enderror
                  </div>




<div class="form-group">
                      <label for="author_img">Documents<span class="text text-red">*</span></label>
                      <input type="file" name="documents" class="form-control" id="author_img">
                       @error('documents')
     <p class="help-block" style="color: red">{{$errors->first('documents')}} 
                                            </p>
    @enderror
                    </div>


 <script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#package").on('change',function(){
      var f=$(this).val();
      if (f==0) {
     var v= $("#hideing").hide();

   }else{

   $("#hideing").show();
   }

    });
});
</script>
                    
                    <div class="form-group">
                      <label>Package <span class="text text-red">*</span></label>
                      <select name="package" id="package" class="form-control select2" style="width: 100%;">
                        <option value="">-- Select Package --</option>
                        <option value="0" id="myBtn">Unpaid</option>
                        <option value="2">Basic</option>
                        <option value="3">Standard</option>
                        <option value="4">premium</option>

                      </select>
             
          @error('package')
     <p class="help-block" style="color: red">{{$errors->first('package')}} 
                                            </p>
    @enderror

                    </div>
 
                    <div class="form-group" id="hideing">
                      <label for="phone">Price</label>
                      <input type="number" name="price" class="form-control" id="price" placeholder="Price" value="0">
                       <!-- @error('price')
     <p class="help-block" style="color: red">{{$errors->first('price')}} 
                                            </p>
    @enderror -->
                    </div>
 
 


 <div class="row">
<div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Start Date</label>
                      <input type="date" name="startdate" class="form-control" id="date" placeholder="Price">
                       @error('startdate')
     <p class="help-block" style="color: red">{{$errors->first('startdate')}} 
                                            </p>
    @enderror
                      </div>

</div>

<div class="col-md-6">

               <div class="form-group">
                      <label for="phone">Expiry Date</label>
                      <input type="date" name="expirydate" class="form-control" id="date" placeholder="Price">
           @error('expirydate')
     <p class="help-block" style="color: red">{{$errors->first('expirydate')}} 
                                            </p>
    @enderror
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