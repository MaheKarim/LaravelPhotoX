@extends('admin.master')
@section('content')

<div class="container">
    <div class=" grid-margin stretch-card">
        <div class="card">
            @if ( session('deletemsg') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('deletemsg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif
                <table class="table table-borderd">
                        <thead>
                          <tr>
                            <th>Contact Name</th>
                            <th>Contact Mail</th>
                            <th>Contact Message</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->mail }}</td>
                            <td>{{ $contact->msg }}</td>
                            <td>
                                    <a href="{{ route('deleteContact', $contact->id) }}" onclick="event.preventDefault();
                                            document.getElementById('destroy'+{{ $contact->id }}).submit();" class="btn btn-danger btn-xs">
                                            <span> <i class="fas fa-trash"></i> </span>
                                        </a>
                                    <form id="destroy{{ $contact->id }}" action="{{ route('deleteContact', $contact->id) }}" method="post" style="display: none;">
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




@endsection

