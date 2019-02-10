@include('master')

<body>
    <!--navbar part start-->

    <!--navbar part end-->

    <!--package part start-->
   @include('headfile')
    <!--package part start-->
<h2> Gallery Of {{ $album_info->name }} </h2>
    <!--album part start-->
    <section id="full_album">
        <div class="container-fluid mb-5">
            <div class="row">

              @forelse ($galleries as $gallery)

              <div class="col-md-3">
                <div class="album_img">

                        <img class="img-fluid img-thumbnail" src="{{ asset('albumgallery') }}/{{ $gallery->image }}" alt="">
                        <div class="overlay text-center">

                        </div>

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
