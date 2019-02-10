@extends('admin.master')
@section('content')
<div class="container">
        <div class="grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">About Heading</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputName1" placeholder="About Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">About Description</label>
                        <textarea name="category_description" class="form-control" id="exampleTextarea1" rows="6" placeholder="About Description"></textarea>
                      </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Input Your Image</label>
                            <input type="file" name="category_image" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                          <hr>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Add About</button>
                      <a href="{{ route('category.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>

</div>

@endsection
