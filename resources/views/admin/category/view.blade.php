@extends('admin.master')
@section('content')

<div class="container">
    <div class=" grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            {{--  <h4 class="card-title">Category Control</h4>  --}}
            <p class="card-description">
                    <a href="{{ route('category.create') }}" class="btn btn-gradient-primary btn-fw">Add About</a>
            </p>

             {{-- Add Notifications --}}

            @if ( session('notifications') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('notifications') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif

            {{-- DeleteNotifications --}}

            @if ( session('deletenotifications') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('deletenotifications') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif
            {{-- Update Notifications --}}
            @if ( session('updatenotification') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('updatenotification') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif
            {{-- Table Start Here --}}
            <table class="table table-borderd">
              <thead>
                <tr>
                  <th>About Name</th>
                  <th>About Description</th>
                  <th>Created</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                  <tr>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->category_description }}</td>
                        <td>{{ date("j M Y", strtotime($category->created_at)) }}</td>
                        <td>

                            <img src="{{ asset('aboutfolder/'.$category->category_image) }}" alt="">
                        </td>
                       <td>
                                <a href="{{ url('category/edit') }}/{{ $category->id }}" class="btn btn-info btn-xs">
                                    <span>  <i class="far fa-edit"></i> </span>
                                </a>
                                <a href="{{ url('category/destroy') }}/{{ $category->id }}" class="btn btn-danger btn-xs">
                                    <span> <i class="fas fa-trash"></i> </span>
                                </a>
                       </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@endsection

