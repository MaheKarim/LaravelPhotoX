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


                        @if ( session('sentNotifications') )
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('sentNotifications') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
<h2>Change Your Logo</h2>
                        <hr>
                    <form class="forms-sample" method="POST" action="{{route('logoupdate' , $logochange->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Input Your Image</label>
                            <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-gradient-primary mr-2[">Update Logo</button>
                        <a href="{{ route('category.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
                <hr>

                <table class="table table-borderd">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                                    <img  src="{{ asset('logo/'.$logochange->logo) }}" alt="">

                            </td>
                            <td>
                                {{--<a href="{{ route('logoshow', $logochange->id)  }}" class="btn btn-info btn-xs">--}}
                                    {{--<span>  <i class="far fa-edit"></i> </span>--}}
                                {{--</a>--}}

                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection
