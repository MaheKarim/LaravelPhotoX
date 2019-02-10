@include('master')

@section('title', 'Magic Shop')

<body>
    <!--navbar part start-->

    <!--navbar part end-->

    <!--package part start-->
   @include('headfile')
    <!--package part start-->
    <section id="full_port_package">
        <div class="container">
            <div class="row">
                @foreach ($weddingpackages as $weddingpackage)


                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="main_package text-center">
                        <div class="package_icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="package_top">
                            <span> {{ $weddingpackage->wedding_package_name }} </span>
                        </div>
                        <div class="package_detail">
                            <ul>
                                @foreach ($weddingpackage->weddingpackage as $emnei )

                                <li>{{ $emnei->wedding_package_description }}</li>
                                @endforeach
                            </ul>

                            <span>$<h2>{{ $weddingpackage->wedding_package_price }}</h2>/Hour</span>
                        </div>
                        <div class="package_bottom">
                            <a href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </section>
    <!--Package End Here-->

    {{-- Package End Here Ok! --}}
    <!--album part start-->
    <section id="full_album">
        <div class="container-fluid mb-5">
            <div class="row">

              @forelse ($albums as $album)

              <div class="col-md-3">
                <div class="album_img">
                    <a href="{{ route('singleGallery', $album->id) }}">

                        <img class="img-fluid img-thumbnail" src="{{ asset('newweddingalbum') }}/{{ $album->thumbnail }}" alt="">

                        <div class="overlay text-center">
                            <span> {{ $album->name }} Wedding</span>
                        </div>

                    </a>
                </div>
            </div>

              @empty
                    <h2>No Album Available Now </h2>
              @endforelse

            </div>
        </div>
    </section>
    <!--album part start-->

    <!--footer part start-->
   @include('footer')
    <!--footer part end-->
@include('js')
</body>

</html>
