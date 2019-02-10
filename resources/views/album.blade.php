<section id="full_album">
    <div class="container-fluid mb-5">
        <div class="row">


                @foreach ($engagements as $engagement)
            <div class="col-md-3">
                <div class="album_img">
                    <a href="{{ route('engagementToSingleAlbum',$engagement->id) }}">

                        <img class="w-100" src="{{ asset('engagementfolder') }}/{{ $engagement->engagement_thumbnail }}" alt="">
                        <div class="overlay text-center">
                            <span> {{ $engagement->engagement_name }}'s Wedding</span>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
