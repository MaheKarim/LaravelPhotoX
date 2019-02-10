@include('master')

@section('title', 'Magic Shop')

<body>
    <!--navbar part start-->

    <!--navbar part end-->

    <!--package part start-->
   @include('headfile')
    <!--package part start-->
@include('package')
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
