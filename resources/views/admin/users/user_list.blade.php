@extends('admin.layout.structure')

@section('admin_content')
	


<div class="card">
  <div class="card-header">
    <h3 class="card-title">User List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th>Name</th>
	        <th>Phone</th>
	        <th>Email</th>
	        <th>Gender</th>
	        <th>Role</th>
	        <th>Action</th>
	      </tr>
      </thead>
      <tbody>
	      <tr>
	        <td>Florence</td>
	        <td>01711999999</td>
	        <td>florence@gmail.com</td>
	        <td>Female</td>
	        <td>admin</td>
	        <td>
	        	<a href="{{ route('admin.user-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Florence</td>
	        <td>01711999999</td>
	        <td>florence@gmail.com</td>
	        <td>Male</td>
	        <td>Manager</td>
	        <td>
	        	<a href="{{ route('admin.user-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Florence</td>
	        <td>01711999999</td>
	        <td>florence@gmail.com</td>
	        <td>Female</td>
	        <td>Sales Manager</td>
	        <td>
	        	<a href="{{ route('admin.user-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Florence</td>
	        <td>01711999999</td>
	        <td>florence@gmail.com</td>
	        <td>Female</td>
	        <td>Marketing Manager</td>
	        <td>
	        	<a href="{{ route('admin.user-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.user-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
      </tbody>
      <tfoot>
      <tr>
	        <th>Name</th>
	        <th>Phone</th>
	        <th>Email</th>
	        <th>Gender</th>
	        <th>Role</th>
	        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>



@endsection
