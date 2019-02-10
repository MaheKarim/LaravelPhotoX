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

                    <form class="forms-sample" method="POST" action="{{ route('sliderpageimage') }}" enctype="multipart/form-data">
                        @csrf

                        <h2> Add Image To Slider</h2>
                        <hr>
                        <div class="form-group">
                            <label for="">Add Image </label>
                            <input type="file" name="sliderimage" class="form-control">
                        </div>



                        <hr>
                        <button type="submit" class="btn btn-gradient-primary mr-2"> Add Image </button>
                        <a href="{{ route('homepagesection') }}" class="btn btn-light">Cancel</a>
                    </form>
                    <small>Maximum 4 or 8 image only!</small>
                </div>
            </div>
        </div>
    </div>
@endsection
