@include('master')

<body>
    <!--navbar part start-->
    @include('headfile')
    <!--navbar part end-->

    <!--package part start-->
    @include('package')
    <!--package part start-->

    <!--album part start-->
    <section id="full_album">
            <div class="container-fluid mb-5">
                <div class="row">
                    @foreach ($portraits as $portrait)
                    <div class="col-md-3">
                        <div class="album_img">
                            <a href="{{ route('portraitSingleImage',$portrait->id) }}">
                                <img class="w-100" src="{{ asset('portraitfolder') }}/{{ $portrait->portrait_thumbnail }}" alt="">
                                <div class="overlay text-center">
                                    <span> {{ $portrait->portrait_name }} </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    <!--album part end-->

    <!--footer part start-->
    @include('footer')
    <!--footer part end-->


    @include('js')

</body>
</html>
