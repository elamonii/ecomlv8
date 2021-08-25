@extends('admin.layout.structure')

@section('admin_content')
	

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Permission List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th>Permission Name</th>
	        <th>Route</th>
	        <th>Action</th>
	      </tr>
      </thead>
      <tbody>
      	@foreach($permission_data as $permission)
		      <tr>
		        <td>{{ $permission->permission_name }}</td>
		        <td>{{ $permission->permission_route }}</td>
		        <td>
		        	<a href="{{ route('admin.permission-edit', ['id' => $permission->id]) }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
		        	<a href="{{ route('admin.permission-delete', ['id' => $permission->id]) }}"><i class="nav-icon fas fa-cut"></i></a>
		        </td>
		      </tr>
	      @endforeach
      </tbody>
      <tfoot>
      <tr>
	        <th>Permission Name</th>
	        <th>Route</th>
	        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>



@endsection
