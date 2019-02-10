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

                    <form class="forms-sample" method="POST" action="{{ route('supplier.store') }}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Supplier Name</label>
                        <input type="text" name="supplier_name" class="form-control" id="exampleInputName1" placeholder="Supplier Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Supplier PHN</label>
                        <input type="mumber" name="supplier_phn" class="form-control" id="exampleInputName1" placeholder="Supplier PHN">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Supplier Mail</label>
                        <input type="mail" name="supplier_mail" class="form-control" id="exampleInputName1" placeholder="Supplier Mail">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Supplier Company</label>
                        <input type="text" name="supplier_company" class="form-control" id="exampleInputName1" placeholder="Supplier Company">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Supplier Address</label>
                        <textarea name="supplier_address" class="form-control" id="exampleTextarea1" rows="6"></textarea>
                      </div>


                      {{-- <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="publication_status" id="membershipRadios1" value="0">
                                  Un Publish
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="publication_status" id="membershipRadios2" value="1" checked>
                                  Publish
                                </label>
                              </div>
                            </div>
                          </div> --}}

                          <hr>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Add Supplier</button>
                      <a href="{{ route('supplier.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>

</div>

@endsection
