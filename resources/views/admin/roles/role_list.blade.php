@extends('admin.layout.structure')

@section('admin_content')
	


<div class="card">
  <div class="card-header">
    <h3 class="card-title">Role List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th>Role</th>
	        <th>Action</th>
	      </tr>
      </thead>
      <tbody>
        @foreach($role_data as $role)
		      <tr>
		        <td>{{ $role->role_name }}</td>
		        <td>
		        	<a href="{{ route('admin.role-edit', ['id'=>$role->id]) }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
		        	<a href="{{ route('admin.role-delete', ['id'=>$role->id]) }}"><i class="nav-icon fas fa-cut"></i></a>
		        </td>
		      </tr>
		     @endforeach
      </tbody>
      <tfoot>
      <tr>
	        <th>Role</th>
	        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>



@endsection
