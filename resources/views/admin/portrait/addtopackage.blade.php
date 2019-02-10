@extends('admin.master')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                        @if ( session('PackageDescriptionAdd') )
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('PackageDescriptionAdd') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif

                        <h2>Add Data To Portrait  Package</h2>
                        <hr>

                                                <form action="{{ route('portraitDataToPackage') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Select Package</label>
                                                        <select name="portrait_package_id" class="form-control">
                                                          <option disabled selected> Select an Album </option>

                                                          @foreach($portraitpackages as $portraitpackage)
                                                          <option value="{{ $portraitpackage->id }}"> {{ $portraitpackage->portrait_package_name }}  </option>
                                                           @endforeach


                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                         <label for="">Add Description to Package</label>
                                                         <input type="text" name="portrait_package_description" placeholder="Your package description" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-success" value="Add Description To Package">
                                                        </div>
                                                      </form>

                </div>
            </div>
        </div>
</div>

@endsection
