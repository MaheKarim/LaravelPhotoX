@extends('admin.master')
@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">Dashboard</div> --}}

                    <div class="card-body">
                        @if (session('PortraitAlbumUpload'))
                            <div class="alert alert-success" role="alert">
                                {{ session('PortraitAlbumUpload') }}
                            </div>
                        @endif


                    <div class="card-body">
                        @if (session('eAlbumUpload'))
                            <div class="alert alert-success" role="alert">
                                {{ session('eAlbumUpload') }}
                            </div>
                        @endif



                        <h2>Make a New Birthday Album</h2>
<hr>
                        <form action="{{ route('birthdayalbummake') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                 <label for="">Album Name</label>
                                 <input type="text" name="birthday_name" placeholder="Name Of Album" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Album Thumbnail</label>
                                    <input type="file" name="birthday_thumbnail" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-success" value="Make An Album">

                                </div>

                              </form>
                    <div class="form-group">
                    <a href="{{ route('birthdayImageToAlbum') }}">
                   <input type="submit" class="btn btn-success" value="Add Image To Album">
                        </a>
                     </div>
                    </div>
                </div>
            </div>

            <hr>

{{-- Delete MSG Notifications - Session Start --}}
              @if ( session('deletenotification') )
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('deletenotification') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

<br> <br>
            <hr>
            <table class="table table-borderd">
                <thead>
                  <tr>
                      <th> Album Name </th>
                    <th>Image Thumbnail</th>
                    <th>Action </th>
                  </tr>
                 @foreach ($birthdays as $birthday)


                  <tr>
                        <td> {{ $birthday->birthday_name }} </td>
                    <td>
                        <img class="mx-auto" src="{{ asset('birthdayfolder') }}/{{ $birthday->birthday_thumbnail }}" alt="Your Image Is here">
                    </td>

                    <td>
                            <a href="{{ route('deleteBirthday', $birthday->id) }}" onclick="event.preventDefault();
                                    document.getElementById('destroy'+{{ $birthday->id }}).submit();" class="btn btn-danger btn-xs">
                                <span> <i class="fas fa-trash"></i> </span>
                            </a>
                            <form id="destroy{{ $birthday->id }}" action="{{ route('deleteBirthday', $birthday->id) }}" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>


                    </td>
                </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection









