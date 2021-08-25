@extends('admin.layout.structure')

@section('admin_content')

    <!-- general form elements -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Category Details</h3>
      </div>
      <!-- /.card-header -->
        <div class="card-body">

          <div class="container">
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Category Name:
              </div>
              <div class="col-lg-10 col-md-10">
                Smart Phone
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Slug:
              </div>
              <div class="col-lg-10 col-md-10">
                smart-phone
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Parent Category:
              </div>
              <div class="col-lg-10 col-md-10">
                Electronics
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-lg-2 col-md-2">
                Related Category:
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
                Category Images:
              </div>
              <div class="col-lg-10 col-md-10">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-5.jpg') }}">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-6.jpg') }}">
                <img style="height: 200px; width:250px;" src="{{ asset('/img/category-7.jpg') }}">
                <hr>
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
