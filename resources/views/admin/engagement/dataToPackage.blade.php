@extends('admin.master')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                        @if ( session('PackageToDescription') )
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('PackageToDescription') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif

                        <h2>Add Data To Engagement  Package</h2>
                        <hr>

                                                <form action="{{ route('engagementDataToPackage') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Upload Image To Album</label>
                                                        <select name="engagement_package_id" class="form-control">
                                                          <option disabled selected> Select an Album </option>

                                                          @foreach($engagementpackages as $engagementpackage)
                                                          <option value="{{ $engagementpackage->id }}"> {{ $engagementpackage->engagement_package_name }}  </option>
                                                           @endforeach


                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                         <label for="">Upload an image to albumn</label>
                                                         <input type="text" name="engagement_package_description" placeholder="Your package description" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-success" value="Add Description To Image">
                                                        </div>
                                                      </form>

                </div>
            </div>
        </div>
</div>

@endsection
