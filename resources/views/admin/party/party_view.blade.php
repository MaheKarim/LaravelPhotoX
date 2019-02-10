@extends('admin.master')
@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">Dashboard</div> --}}

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




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



                        <h2>Make a New Party Album</h2>
<hr>
                        <form action="{{ route('partyalbummake') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                 <label for="">Album Name</label>
                                 <input type="text" name="party_name" placeholder="Name Of Album" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Album Thumbnail</label>
                                    <input type="file" name="party_thumbnail" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-success" value="Make An Album">

                                </div>

                              </form>
                    <div class="form-group">
                    <a href="{{ route('partyalbumtoImage') }}">
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

                 @foreach($parties as $party)

                  <tr>
                        <td> {{  $party->party_name }}</td>
                    <td>
                        <img class="mx-auto" src="{{ asset('partyfolder') }}/{{ $party->party_thumbnail }}" alt="Your Image Is here">
                    </td>

                    <td>
                            <a href="{{ route('deleteParty', $party->id) }}" onclick="event.preventDefault();
                                    document.getElementById('destroy'+{{ $party->id }}).submit();" class="btn btn-danger btn-xs">
                                <span> <i class="fas fa-trash"></i> </span>
                            </a>
                            <form id="destroy{{ $party->id }}" action="{{ route('deleteParty', $party->id) }}" method="post" style="display: none;">
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









