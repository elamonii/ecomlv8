@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Role Wise Permissions</h3>
      </div>
      <!-- /.card-header -->
      
      <!-- form start -->
      <form method="" action="">
        <div class="card-body">

          <!-- Select Parent Category -->
          <div class="form-group">
            <label>Select Role</label>
            <select name="parent_id" class="form-control">
              <option>Select Role</option>
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>

          <!-- Select multiple-->
          <div class="form-group">
            <label>Select Permissions</label>
            <select multiple class="form-control">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
              <option>option 6</option>
              <option>option 7</option>
              <option>option 8</option>
              <option>option 9</option>
            </select>
          </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </form>








      <!-- <div class="card-footer">
        <a href="{{ url()->previous() }}">
          <button class="btn btn-info">Back</button>
        </a>
      </div> -->

    </div>
    <!-- /.card -->



@endsection
