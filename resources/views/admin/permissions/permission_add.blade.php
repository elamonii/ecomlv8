@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Add New Permission</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{ route('admin.permission-save') }}">
        @csrf
        <div class="card-body">

          <div class="form-group">
            <label>Permission Title</label>
            <input type="text" class="form-control" name="permission_name" placeholder="Permission">
          </div>
          
          <div class="form-group">
            <label>Route</label>
            <input type="text" class="form-control" name="permission_route" placeholder="Route">
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
