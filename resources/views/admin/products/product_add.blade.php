@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Add New Product</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="" action="">
        <div class="card-body">

          <div class="container">
              <div class="row">

                <div  class="col-lg-6 col-md-6">
                  
                  <div class="form-group">
                    <label>Select Category</label>
                    <select name="category_id" class="form-control">
                      <option>Select Category</option>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Select Sub-category</label>
                    <select multiple name="sub_category_id" class="form-control">
                      <option>Select Sub-category</option>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                  </div>

                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Slug">
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea id="description" class="form-control" rows="3" placeholder="Description">
                      
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label>Product Specification</label>
                    <textarea id="product_spec" name="product_spec" class="form-control" rows="3" placeholder="Product Specification">
                      
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label>Stock Quantity</label>
                    <input type="text" class="form-control" name="stock_qty" placeholder="Stock Quantity">
                  </div>

                  <div class="form-group">
                    <label for="main_image">Product Image (Main)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="main_image" id="main_image">
                        <label class="custom-file-label" for="main_image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bulk_image">Product Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" multiple class="custom-file-input" name="bulk_image" id="bulk_images">
                        <label class="custom-file-label" for="bulk_image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>




                </div>
                <div  class="col-lg-6 col-md-6">



                  <div class="form-group">
                    <label>Select Available Color</label>
                    <select multiple name="available_color" class="form-control">
                      <option>Select Colors</option>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Select Available Size</label>
                    <select multiple name="available_size" class="form-control">
                      <option>Select Available Size</option>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Select Tags</label>
                    <select multiple name="tags" class="form-control">
                      <option>Select Tags</option>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>


                  <div class="form-group">
                    <label>Buying Price</label>
                    <input type="text" class="form-control" name="buying_price" placeholder="Buying Price">
                  </div>


                  <div class="form-group">
                    <label>Tax Amount</label>
                    <input type="text" class="form-control" name="tax_amount" placeholder="Tax Amount">
                  </div>


                  <div class="form-group">
                    <label>Discount Type</label>
                    <input type="text" class="form-control" name="discount_type" placeholder="Discount Type">
                  </div>


                  <div class="form-group">
                    <label>Discount Amount</label>
                    <input type="text" class="form-control" name="discount_type" placeholder="Discount Amount">
                  </div>

                  <div class="form-group">
                    <label>Selling Price</label>
                    <input type="text" class="form-control" name="selling_price" placeholder="Selling Price">
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
