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


                    <div class="card-body">
                        @if (session('eAlbumUpload'))
                            <div class="alert alert-success" role="alert">
                                {{ session('eAlbumUpload') }}
                            </div>
                        @endif



                        <h2>Make a New Engagement Album</h2>
<hr>
                        <form action="{{ route('engagemnetalbum') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                 <label for="">Album Name</label>
                                 <input type="text" name="engagement_name" placeholder="Name Of Album" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Album Thumbnail</label>
                                    <input type="file" name="engagement_thumbnail" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-success" value="Make An Album">

                                </div>
                                <!-- <div class="form-group">
                                </div> -->
                              </form>
                              {{-- Image To Album Link --}}
                    <div class="form-group">
                    <a href="{{ route('engagementimagetoalbum') }}">
                   <input type="submit" class="btn btn-success" value="Add Image To Album">
                        </a>
                     </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="alert alert-primary" role="alert">
                This is your album List Here!
              </div>
{{-- Delete MSG Notifications - Session Start --}}
              @if ( session('deletenotification') )
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('deletenotification') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif



<br>
            <hr>
            <table class="table table-borderd">
                <thead>
                  <tr>
                      <th> Album Name </th>
                    <th>Image Thumbnail</th>
                    <th>Action </th>
                  </tr>
                  @foreach ($engagements as $engagement)
                  <tr>
                        <td> {{ $engagement->engagement_name }} </td>
                    <td>  <img class="mx-auto" src="{{ asset('engagementfolder') }}/{{ $engagement->engagement_thumbnail }}" alt="">  </td>

                    <td>

                            <a href="{{ route('deleteEngagement', $engagement->id) }}" onclick="event.preventDefault();
                                    document.getElementById('destroy'+{{ $engagement->id }}).submit();" class="btn btn-danger btn-xs">
                                <span> <i class="fas fa-trash"></i> </span>
                            </a>
                            <form id="destroy{{ $engagement->id }}" action="{{ route('deleteEngagement', $engagement->id) }}" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                    </td>
                </tr>
                @endforeach
                </thead>
            </table>

            <div class="alert alert-primary" role="alert">
                This is your Package Programme List Here!
              </div>

              @if ( session('packagecreate') )
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('packagecreate') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

              <form action="{{ route('engagementpackage') }}" method="POST">
                @csrf
                <div class="form-group">
                     <label for="">Package Name</label>
                     <input type="text" name="engagement_package_name" placeholder="Write down your package name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Package Price</label>
                        <input type="text" name="engagement_package_price" class="form-control" placeholder="Package Price">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-success" value="Make An Album">
                      {{-- form submit --}}

                    </div>
                  </form> <br>
                  <div class="form-group">
                        <a href="{{ route('addEngagementPackage') }}">
                        <input type="submit" class="btn btn-success" value="Add Image To Album">
                               </a>
                  </div>
{{--    Package Table Section        --}}
<hr> <br>
              @if ( session('packagedelete') )
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('packagedelete') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

<table class="table table-borderd">
    <thead>
      <tr>
          <th> package Name </th>
        <th>package price</th>
        <th>Action </th>
      </tr>
      @foreach ($engagementpackages as $engagementpackage)
      <tr>
            <td> {{ $engagementpackage->engagement_package_name }} </td>
        <td>  {{ $engagementpackage->engagement_package_price }} </td>

        <td>

                <a href="{{ route('deleteEngagementPackage', $engagementpackage->id) }}" onclick="event.preventDefault();
                        document.getElementById('destroy'+{{ $engagementpackage->id }}).submit();" class="btn btn-danger btn-xs">
                    <span> <i class="fas fa-trash"></i> </span>
                </a>
                <form id="destroy{{ $engagementpackage->id }}" action="{{ route('deleteEngagementPackage', $engagementpackage->id) }}" method="post" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>

        </td>
    </tr>
    @endforeach
    </thead>
</table>


</div>
    <hr>

    </div>

@endsection







