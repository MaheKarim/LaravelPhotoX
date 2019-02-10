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



                        <h2>Make a New Portrait Album</h2>
<hr>
                        <form action="{{ route('portraitalbummake') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                 <label for="">Album Name</label>
                                 <input type="text" name="portrait_name" placeholder="Name Of Album" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Album Thumbnail</label>
                                    <input type="file" name="portrait_thumbnail" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-success" value="Make An Album">

                                </div>
                                <!-- <div class="form-group">
                                </div> -->
                              </form>
                    <div class="form-group">
                    <a href="{{ route('imagetoalbum') }}">
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
                  @foreach ($portraits as $portrait)
                  <tr>
                        <td> {{ $portrait->portrait_name }} </td>
                    <td>
                        <img class="mx-auto" src="{{ asset('portraitfolder') }}/{{ $portrait->portrait_thumbnail }}" alt="Your Image Is here">
                    </td>

                    <td>

                            <a href="{{ route('deletePortrait', $portrait->id) }}" onclick="event.preventDefault();
                                    document.getElementById('destroy'+{{ $portrait->id }}).submit();" class="btn btn-danger btn-xs">
                                <span> <i class="fas fa-trash"></i> </span>
                            </a>
                            <form id="destroy{{ $portrait->id }}" action="{{ route('deletePortrait', $portrait->id) }}" method="post" style="display: none;">
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
<br>        <hr>
        <div class="alert alert-primary text-center" role="alert">
                This is your Portrait Package List Here!
              </div>
{{-- Alert End Here --}}

@if ( session('portraitPackCreate') )
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('portraitPackCreate') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
{{-- Package Create Section --}}
<div class="col-md-8">
        <form action="{{ route('portraitpackge') }}" method="POST">
                @csrf
                <div class="form-group">
                     <label for="">Package Name</label>
                     <input type="text" name="portrait_package_name" placeholder="Write down your package name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Package Price</label>
                        <input type="text" name="portrait_package_price" class="form-control" placeholder="Wedding Package Price">
                    </div>
                    <div class="col-md-4 form-group">
                      <input type="submit" class="btn btn-success" value="Make An Album">
                      {{-- form submit --}}

                    </div>  <div class="cold-md-4 form-group">
                            <a href="">
                            <input type="submit" class="btn btn-success" value="Add Package To To Description">
                                   </a>
                      </div>
                  </form>

</div>

    </div>
@endsection


