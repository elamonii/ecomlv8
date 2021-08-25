@extends('admin.layout.structure')

@section('admin_content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Product List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th>Name</th>
	        <th>Slug</th>
	        <th>Category</th>
	        <th>Sub-Category</th>
	        <th>Buying Price</th>
	        <th>Selling Price</th>
	        <th>Stock Qty</th>
	        <th>Action</th>
	      </tr>
      </thead>
      <tbody>
	      <tr>
	        <td>Vivo X60</td>
	        <td>vivo_x60</td>
	        <td>Smart Phone</td>
	        <td>Vivo</td>
	        <td>300</td>
	        <td>400</td>
	        <td>1000</td>
	        <td>
	        	<a href="{{ route('admin.product-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo X60</td>
	        <td>vivo_x60</td>
	        <td>Smart Phone</td>
	        <td>Vivo</td>
	        <td>300</td>
	        <td>400</td>
	        <td>1000</td>
	        <td>
	        	<a href="{{ route('admin.product-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo X60</td>
	        <td>vivo_x60</td>
	        <td>Smart Phone</td>
	        <td>Vivo</td>
	        <td>300</td>
	        <td>400</td>
	        <td>1000</td>
	        <td>
	        	<a href="{{ route('admin.product-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo X60</td>
	        <td>vivo_x60</td>
	        <td>Smart Phone</td>
	        <td>Vivo</td>
	        <td>300</td>
	        <td>400</td>
	        <td>1000</td>
	        <td>
	        	<a href="{{ route('admin.product-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo X60</td>
	        <td>vivo_x60</td>
	        <td>Smart Phone</td>
	        <td>Vivo</td>
	        <td>300</td>
	        <td>400</td>
	        <td>1000</td>
	        <td>
	        	<a href="{{ route('admin.product-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
	      <tr>
	        <td>Vivo X60</td>
	        <td>vivo_x60</td>
	        <td>Smart Phone</td>
	        <td>Vivo</td>
	        <td>300</td>
	        <td>400</td>
	        <td>1000</td>
	        <td>
	        	<a href="{{ route('admin.product-details') }}"><i class="nav-icon fas fa-eye" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-edit') }}"><i class="nav-icon fas fa-edit" style="padding-right: 10px;"></i></a>
	        	<a href="{{ route('admin.product-delete') }}"><i class="nav-icon fas fa-cut"></i></a>
	        </td>
	      </tr>
      </tbody>
      <tfoot>
      <tr>
	        <th>Name</th>
	        <th>Slug</th>
	        <th>Category</th>
	        <th>Sub-Category</th>
	        <th>Buying Price</th>
	        <th>Selling Price</th>
	        <th>Stock Qty</th>
	        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>






@endsection

