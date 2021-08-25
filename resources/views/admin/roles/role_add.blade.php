@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Add New Role</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{route('admin.role-save')}}">
        @csrf
        <div class="card-body">

          <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" name="role_name" placeholder="Role">
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
