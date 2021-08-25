@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Product Details</h3>
      </div>
      <!-- /.card-header -->
        <div class="card-body">

          <div class="container">
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Product Name:
              </div>
              <div class="col-lg-10 col-md-10">
                ABC Headphone
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Category:
              </div>
              <div class="col-lg-10 col-md-10">
                Electronic, Gadget
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Sub-category:
              </div>
              <div class="col-lg-10 col-md-10">
                Headphone
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Description:
              </div>
              <div class="col-lg-10 col-md-10">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus nunc nec orci lobortis suscipit. Cras eu magna ipsum. Ut vitae metus a ante elementum eleifend sed convallis felis. Sed quis dolor urna. Ut eleifend lectus eget nunc auctor mattis. Morbi aliquam imperdiet gravida. Donec ac semper sem, dapibus vestibulum orci. Ut at est nec dolor posuere lobortis.
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Product Specification:
              </div>
              <div class="col-lg-10 col-md-10">
                Wireless Headphone, rechargable
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Available Size:
              </div>
              <div class="col-lg-10 col-md-10">
                n/a
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Tags:
              </div>
              <div class="col-lg-10 col-md-10">
                xiaomi, apple, samsung
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Stock Qty:
              </div>
              <div class="col-lg-10 col-md-10">
                500
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Buying Price:
              </div>
              <div class="col-lg-10 col-md-10">
                1500
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Selling Price:
              </div>
              <div class="col-lg-10 col-md-10">
                2000
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Tax Amount(%):
              </div>
              <div class="col-lg-10 col-md-10">
                15
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Discount Type:
              </div>
              <div class="col-lg-10 col-md-10">
                <select>
                  <option>Select Discount Type</option>
                  <option>Flat</option>
                  <option>Percentage</option>
                </select>
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Discount Amount:
              </div>
              <div class="col-lg-10 col-md-10">
                7
              </div>
            </div><hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Product Images:
              </div>
              <div class="col-lg-10 col-md-10">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-4.jpg') }}">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-2.jpg') }}">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-1.jpg') }}">
                <hr>
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-5.jpg') }}">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-6.jpg') }}">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-7.jpg') }}">
              </div>
            </div><hr>


          </div>
        </div>
        <!-- /.card body -->

        <div class="card-footer">
          <a href="{{ url()->previous() }}">
            <button class="btn btn-info">Back</button>
          </a>
        </div>        
      
    </div>
    <!-- /.card -->

@endsection
