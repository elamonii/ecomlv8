@extends('admin.layout.structure')

@section('admin_content')
	


<div class="card">
  <div class="card-header">
    <h3 class="card-title">Category List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th>Name</th>
	        <th>Slug</th>
	        <th>Parent Category</th>
	        <th>Related Categories</th>
	        <th>Action</th>
	      </tr>
      </thead>
      <tbody>
	      <tr>
	        <td>Vivo</td>
	        <td>vivo</td>
	        <td>Smart Phone</td>
	        <td>Electronics, Gadgets</td>
	        <td>
	        	<a href="{{ route('admin.category-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo</td>
	        <td>vivo</td>
	        <td>Smart Phone</td>
	        <td>Electronics, Gadgets</td>
	        <td>
	        	<a href="{{ route('admin.category-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo</td>
	        <td>vivo</td>
	        <td>Smart Phone</td>
	        <td>Electronics, Gadgets</td>
	        <td>
	        	<a href="{{ route('admin.category-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo</td>
	        <td>vivo</td>
	        <td>Smart Phone</td>
	        <td>Electronics, Gadgets</td>
	        <td>
	        	<a href="{{ route('admin.category-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo</td>
	        <td>vivo</td>
	        <td>Smart Phone</td>
	        <td>Electronics, Gadgets</td>
	        <td>
	        	<a href="{{ route('admin.category-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo</td>
	        <td>vivo</td>
	        <td>Smart Phone</td>
	        <td>Electronics, Gadgets</td>
	        <td>
	        	<a href="{{ route('admin.category-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.category-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
      </tbody>
      <tfoot>
      <tr>
			<th>Name</th>
			<th>Slug</th>
			<th>Parent Category</th>
			<th>Related Categories</th>
			<th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>






@endsection

