@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Edit Permission</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{ route('admin.permission-update') }}">
        @csrf
        <div class="card-body">
          <input type="hidden" name="id" value="{{ $permission_data->id }}">
          <div class="form-group">
            <label>Permission Title</label>
            <input type="text" class="form-control" name="permission_name" value="{{ $permission_data->permission_name }}" placeholder="Permission">
          </div>
          
          <div class="form-group">
            <label>Route</label>
            <input type="text" class="form-control" name="permission_route" value="{{ $permission_data->permission_route }}" placeholder="Route">
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info">Edit</button>
          <a href="{{ URL::previous() }}">
            <button class="btn btn-info">Back</button>
          </a>
        </div>
      </form>
    </div>
    <!-- /.card -->

@endsection