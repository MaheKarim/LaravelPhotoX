@include('master')

<body>
    <!--navbar part start-->

    <!--navbar part end-->

    <!--package part start-->
   @include('headfile')
    <!--package part start-->
<h2 class="text text-center"> Gallery Of {{ $portraits->portrait_name }} </h2>
    <!--album part start-->
    <section id="full_album">
        <div class="container-fluid mb-5">
            <div class="row">

              @forelse ($portraitgalleries as $portraitgallery)

              <div class="col-md-3">
                <div class="album_img">

                        <img class="img-fluid img-thumbnail" src="{{ asset('portrait_gallery') }}/{{ $portraitgallery->porttrait_album_thumbnail }}" alt="Image Preview Here">
                        <div class="overlay text-center">

                        </div>

                </div>
            </div>

              @empty
              <br>
              <hr>
              <div class="col-12">
                    <h2 class="text text-center">No Album Available Now </h2>
              </div>

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
