@extends('admin.master')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">Dashboard</div> --}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2>Make a New Album</h2>
<hr>
                        <form action="{{ route('makeAlbum') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                 <label for="">Album Name</label>
                                 <input type="text" name="album_name" placeholder="Name Of Album" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Album Thumbnail</label>
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-success" value="Make An Album">

                                </div>
                                <!-- <div class="form-group">
                                </div> -->
                              </form>
      <div class="form-group">
        <a href="{{ route('addImageToAlbum') }}">
        <input type="submit" class="btn btn-success" value="Add Image To Album">
               </a>
      </div>
                    </div>
                </div>

            </div>
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
                 @foreach ($albums as $album)


                  <tr>
                        <td> {{ $album->name }} </td>
                    <td>
                        <img class="mx-auto" src="{{ asset('newweddingalbum') }}/{{ $album->thumbnail }}" alt="Your Image Is here">
                    </td>

                    <td>
                            <a href="{{ route('deleteWedding', $album->id) }}" onclick="event.preventDefault();
                                    document.getElementById('destroy'+{{ $album->id }}).submit();" class="btn btn-danger btn-xs">
                                <span> <i class="fas fa-trash"></i> </span>
                            </a>
                            <form id="destroy{{ $album->id }}" action="{{ route('deleteWedding', $album->id) }}" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>


                    </td>
                </tr>
                @endforeach
                </thead>
            </table>



        </div>
        <div class="alert alert-primary" role="alert">
            This is your Wedding Package List Here!
          </div>
          {{-- Package Create Session Start Here --}}
          @if ( session('weddingpackagecreate') )
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('weddingpackagecreate') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          {{-- Package Create Session End Here --}}
  {{-- Package Form Submit Start Here --}}
          <form action="{{ route('weddingpackge') }}" method="POST">
            @csrf
            <div class="form-group">
                 <label for="">Package Name</label>
                 <input type="text" name="wedding_package_name" placeholder="Write down your package name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Package Price</label>
                    <input type="text" name="wedding_package_price" class="form-control" placeholder="Wedding Package Price">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Make An Album">
                  {{-- form submit --}}

                </div>
              </form> <br>
              <div class="form-group">
                    <a href="{{ route('weddingpackgetodes') }}">
                    <input type="submit" class="btn btn-success" value="Add Image To Album">
                           </a>
              </div>
    </div>

@endsection
