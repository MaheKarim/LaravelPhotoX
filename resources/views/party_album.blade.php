@include('master')

<body>
    <!--navbar part start-->
    @include('headfile')
    <!--navbar part end-->

    <!--package part start-->
    <section id="full_party_package">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="main_package text-center">
                        <div class="package_icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="package_top">
                            <span>SILVER</span>
                        </div>
                        <div class="package_detail">
                            <ul>
                                <li>Lorem ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem dolor sit amet.</li>
                                <li>Lorem ipsum dolor amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit .</li>
                            </ul>

                            <span>$<h2>25</h2>/Hour</span>
                        </div>
                        <div class="package_bottom">
                            <a href="#">Contact Me</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="main_package text-center">
                        <div class="package_icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="package_top">
                            <span>Gold</span>
                        </div>
                        <div class="package_detail">
                            <ul>
                                <li>Lorem ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem dolor sit amet.</li>
                                <li>Lorem ipsum dolor amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit .</li>
                            </ul>

                            <span>$<h2>30</h2>/Hour</span>
                        </div>
                        <div class="package_bottom">
                            <a href="#">Contact Me</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="main_package text-center">
                        <div class="package_icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="package_top">
                            <span>Platinum</span>
                        </div>
                        <div class="package_detail">
                            <ul>
                                <li>Lorem ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem dolor sit amet.</li>
                                <li>Lorem ipsum dolor amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit .</li>
                            </ul>

                            <span>$<h2>40</h2>/Hour</span>
                        </div>
                        <div class="package_bottom">
                            <a href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--package part start-->

    <!--album part start-->



        <section id="full_album">
                <div class="container-fluid mb-5">
                    <div class="row">
                        @forelse ($parties as $party)
                        <div class="col-md-3">
                            <div class="album_img">
                                <a href="{{ route('partyAlbumToImageAlbum',$party->id) }}">

                                    <img class="w-100" src="{{ asset('partyfolder') }}/{{ $party->party_thumbnail }}" alt="">
                                    <div class="overlay text-center">
                                        <span> {{ $party->party_name }}'s Party</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @empty
                          <h2>No Album Available</h2>
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
