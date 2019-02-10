@extends('admin.master')
@section('content')

    <div class="container">
        <div class=" grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                        <h4 class="card-title">Add Image To Slider</h4>
                        <p class="card-description">
                            <a href="{{ route('imageaddtoslider') }}" class="btn btn-gradient-primary btn-fw">Add Image To Row</a>
                        </p>

                        <hr> <br>

                       {{-- Session Start --}}
                        @if (session('status3'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status3') }}
                        </div>
                    @endif
                    @if (session('delete_slider'))
                    <div class="alert alert-success" role="alert">
                        {{ session('delete_slider') }}
                    </div>
                @endif



                    <table class="table table-borderd">
                            <thead>
                            <tr>
                                <th>Image Detailed</th>
                                <th>Image Thumnail</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($sliderimages as $sliderimage)
                                <tr>

                                    <td>{{ $sliderimage->image }}</td>

                                    <td>

                                        <img class="mx-auto" src="{{ asset('sliderimage') }}/{{ $sliderimage->image }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('deleteslider', $sliderimage->id) }}" onclick="event.preventDefault();
                                                document.getElementById('destroy'+{{ $sliderimage->id }}).submit();" class="btn btn-danger btn-xs">
                                            <span> <i class="fas fa-trash"></i> </span>
                                        </a>
                                        <form id="destroy{{ $sliderimage->id }}" action="{{ route('deleteslider', $sliderimage->id) }}" method="post" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        <br> <br> <br>
                    <h4 class="card-title">Add Image To Row</h4>
                    <p class="card-description">
                        <a href="{{ route('imageadd') }}" class="btn btn-gradient-primary btn-fw">Add Image To Row</a>
                    </p>



                    {{-- DeleteNotifications --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('deletemsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('deletemsg') }}
                        </div>
                    @endif


                    {{-- Update Notifications --}}

                    {{-- Table Start Here --}}
                    <table class="table table-borderd">
                        <thead>
                        <tr>
                            <th>Image Detailed</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($homepages as $homepage)
                            <tr>

                                <td>{{ $homepage->image }}</td>

                                <td>

                                    <img class="mx-auto" src="{{ asset('homepagerow') }}/{{ $homepage->image }}" alt="">
                                </td>
                                <td>

                                    <a href="{{ route('deletehp', $homepage->id) }}" onclick="event.preventDefault();
                                            document.getElementById('destroy'+{{ $homepage->id }}).submit();" class="btn btn-danger btn-xs">
                                        <span> <i class="fas fa-trash"></i> </span>
                                    </a>
                                    <form id="destroy{{ $homepage->id }}" action="{{ route('deletehp', $homepage->id) }}" method="post" style="display: none;">
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

