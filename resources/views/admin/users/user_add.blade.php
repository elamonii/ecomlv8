@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Add New User</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{ route('admin.user-save')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="name" placeholder="Name">
                </div>
                
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="phone" value="phone" placeholder="Phone">
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
            
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="email" placeholder="Email">
                </div>
                
                <div class="form-group">
                  <!-- <label>Gender</label> -->
                  <!-- <input type="text" class="form-control" name="gender" placeholder="Gender"> -->

                  <div class="icheck-primary d-inline">
                    <label>Gender: </label>
                    <br>Male <input type="radio" name="gender" value="0">
                    &nbsp;&nbsp;&nbsp; 
                    Female <input type="radio" name="gender" value="1">
                  </div>
                </div>
            </div>
          </div>  

          <div class="form-group">
            <label>Select Role</label>
            <select name="role_id" class="form-control select2bs4" style="width: 100%;">
              <option value="0" selected="selected">Select Role</option>
                <option value="1">Editor</option>
                <option value="2">Checker</option>
            </select>
          </div>

          <!-- <div class="form-group">
            <label>Select Role</label>
              <select name="role">
                <option value="0">Select Role</option>
                <option value="1">Editor</option>
                <option value="2">Checker</option>
              </select>
          </div> -->

          <!-- textarea -->
          <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" rows="3" placeholder="Address"></textarea>
          </div>



          <div class="form-group">
            <label for="exampleInputFile">User Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="user_image" value="user_image">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>




        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info">Submit</button>
          <a href="{{ url()->previous() }}">
            <button class="btn btn-info">Back</button>
          </a>
        </div>
      </form>
    </div>
    <!-- /.card -->



@endsection
