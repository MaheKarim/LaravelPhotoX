@extends('admin.master')
@section('content')
<div class="container-fluid">
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
<h1>Change your password</h1>
   <hr>
<br>


/*
|--------------------------------------------------------------------------
| Session Code  Start
|--------------------------------------------------------------------------
*/
@if ( session('') )
<div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
@endif
/*
|--------------------------------------------------------------------------
| Session Code End
|--------------------------------------------------------------------------
*/

<br><br>
                    <form class="forms-sample" method="POST" action="{{ route('passchangeupdate') }}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Old Password</label>
                        <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password" value="{{old('old_password') }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">New Password</label>
                        <input type="password" name="new_password" class="form-control" id="exampleInputName1" placeholder="New Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputName1" placeholder="Confirm Password ">
                      </div>
<br> <hr>

                      <button type="submit" class="btn btn-rounded btn-danger">Change Password</button>
                      <a href="#" class="btn btn-rounded btn-success">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>

</div>

@endsection
