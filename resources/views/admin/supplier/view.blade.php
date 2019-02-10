@extends('admin.master')
@section('content')

<div class="container">
    <div class=" grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-description">
                    <a href="{{ route('supplier.create') }}" class="btn btn-gradient-primary btn-fw">Add Page</a>
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
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deletenotifications') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif
            {{-- Update Notifications --}}
            @if ( session('updatenotification') )
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updatenotification') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif
            @if ( session('publishednotification') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('publishednotification') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
            @endif
            {{-- Table Start Here --}}
            <table class="table table-borderd">
              <thead>
                <tr>
                  <th>Supplier Name</th>
                  <th>Supplier PHN</th>
                  <th>Supplier Mail</th>
                  <th>Supplier Company</th>
                  <th>Supplier Address</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($suppliers as $supplier)
                  <tr>
                        <td>{{ $supplier->supplier_name }}</td>
                        <td>{{ $supplier->supplier_phn }}</td>
                        <td>{{ $supplier->supplier_mail }}</td>
                        <td>{{ $supplier->supplier_company }}</td>
                        <td>{{ $supplier->supplier_address }}</td>
                        <td>
                               @if ($supplier->publication_status == 1)
                               <a href="{{ route('unpublishedSupplier',['id'=>$supplier->id]) }}" class="btn btn-xs">
                                    <label class="badge badge-success"> Published</label>
                                </a>
                                @else
                                <a href="{{ route('publishedSupplier',['id'=>$supplier->id]) }}" class="btn btn-xs">
                                        <label class="badge badge-warning" style="color:black">Un Active</label>
                                    </a>
                               @endif
                        </td>
                       <td>
                                <a href="{{ route('supplier.edit',$supplier->id) }}" class="btn btn-info btn-xs">
                                    <span>  <i class="far fa-edit"></i> </span>
                                </a> |
                                <a href="{{ route('supplier.destroy', $supplier->id) }}" onclick="event.preventDefault();
                                    document.getElementById('destroy'+{{ $supplier->id }}).submit();" class="btn btn-danger btn-xs">
                                    <span> <i class="fas fa-trash"></i> </span>
                                </a>
                                <form id="destroy{{ $supplier->id }}" action="{{ route('supplier.destroy', $supplier->id) }}" method="post" style="display: none;">
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

{{--  <a href="#" onclick="event.preventDefault(); document.getElementById('deleteForm-'+{{ $supplier->id }}).submit();return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs">
        <span><i class="fas fa-trash "></i></span>
      </a>
      <form id="deleteForm-{{ $supplier->id }}" action="{{ route('supplier.destroy',$supplier->id ) }}" method="POST" style="display: none;">
        @csrf @method('DELETE')
      </form>  --}}
