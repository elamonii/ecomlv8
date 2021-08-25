@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Edit Role</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{ route('admin.role-update') }}">
        @csrf
        <div class="card-body">
          <input type="hidden" name="id" value="{{ $role_data->id }}">
          <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" name="role_name" value="{{ $role_data->role_name }}" placeholder="Role">
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