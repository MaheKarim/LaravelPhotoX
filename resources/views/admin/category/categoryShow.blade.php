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

                <form class="forms-sample" method="POST" action="{{ url('category.update') }}">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">About Name</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputName1" value="{{ $category->category_name }}">
                    <input type="hidden" name="category_id" class="form-control" id="exampleInputName1" value="{{ $category->id }}">

                  </div>

                  <div class="form-group">
                    <label for="exampleTextarea1">About Description</label>
                    <textarea name="category_description" class="form-control" id="exampleTextarea1" rows="6">{{ $category->category_description }}</textarea>
                  </div>

                      <hr>
                  <button type="submit" class="btn btn-gradient-primary mr-2"> Update About</button>
                  <a href="{{ url('category') }}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
</div>
@endsection
