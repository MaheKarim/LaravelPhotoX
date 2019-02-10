@extends('admin.master')
@section('content')

<div class="container">
    <div class=" grid-margin stretch-card">
        <div class="card">
          <div class="card-body">


              @if ( session('deletemsg') )
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('deletemsg') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif

            {{-- Table Start Here --}}
            <table class="table table-borderd">
              <thead>
                <tr>
                  <th>Reviewer Name</th>
                  <th>Review Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($reviews as $review)
                  <tr>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->comment }}</td>+
                        <td>
                            <img src="{{ asset('reviewpost/'.$review->image) }}" alt="">
                        </td>
                       <td>
                           <a href="{{ route('delete', $review->id) }}" onclick="event.preventDefault();
                                   document.getElementById('destroy'+{{ $review->id }}).submit();" class="btn btn-danger btn-xs">
                               <span> <i class="fas fa-trash"></i> </span>
                           </a>
                           <form id="destroy{{ $review->id }}" action="{{ route('delete', $review->id) }}" method="post" style="display: none;">
                               @csrf
                               @method('DELETE')
                           </form>
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

