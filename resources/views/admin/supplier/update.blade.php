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

                <form class="forms-sample" method="POST" action="{{ route('supplier.update', $supplier->id) }}">



                     @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Supplier Name</label>
                    <input type="text" name="supplier_name" class="form-control" id="exampleInputName1" value="{{ $supplier->supplier_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Supplier PHN</label>
                    <input type="text" name="supplier_phn" class="form-control" id="exampleInputName1" value="{{ $supplier->supplier_phn }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Supplier Mail</label>
                    <input type="text" name="supplier_mail" class="form-control" id="exampleInputName1" value="{{ $supplier->supplier_mail }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Supplier Company</label>
                    <input type="text" name="supplier_company" class="form-control" id="exampleInputName1" value="{{ $supplier->supplier_company }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Supplier Address</label>
                    <input type="text" name="supplier_address" class="form-control" id="exampleInputName1" value="{{ $supplier->supplier_address }}">
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Publication Status</label>
                        <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="publication_status" value="0"  id="membershipRadios1" {{ $supplier->publication_status == 0 ? 'checked' : '' }}>
                              UnPublish
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="publication_status" value="1"  id="membershipRadios2" {{ $supplier->publication_status == 1 ? 'checked' : '' }}>
                              Publish
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>
                  <button type="submit" class="btn btn-gradient-primary mr-2">Update Supplier</button>
                  <a href="{{ url('supplier') }}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
</div>
@endsection
