@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Add New Category</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="" action="">
        <div class="card-body">

          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name" placeholder="Category Name">
          </div>
          <div class="form-group">
            <label>Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Slug">
          </div>
        
          <!-- Select Parent Category -->
          <div class="form-group">
            <label>Parent Category</label>
            <select name="parent_id" class="form-control">
              <option>Select Category</option>
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>

          <!-- Select multiple-->
          <div class="form-group">
            <label>Related Categories</label>
            <select multiple class="form-control">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>

          <!-- textarea -->
          <div class="form-group">
            <label>Category Description</label>
            <textarea id="description" class="form-control" rows="3" placeholder="Description">
              
            </textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Category Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
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
