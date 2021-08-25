@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Edit User Information</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="" action="">
        <div class="card-body">

          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="" placeholder="Name">
          </div>
          
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="" placeholder="Phone">
          </div>
          
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="" placeholder="Email">
          </div>
          
          <div class="form-group">
            <label>Gender</label>
            <input type="text" value="" class="form-control" name="gender" placeholder="Gender">
          </div>

          <!-- textarea -->
          <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" rows="3" placeholder="Address">
              
            </textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">User Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
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
          <button type="submit" class="btn btn-info">Edit</button>
          <a href="{{ url()->previous() }}">
            <button class="btn btn-info">Back</button>
          </a>
        </div>
      </form>
    </div>
    <!-- /.card -->



@endsection
