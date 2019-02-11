@include('master')

<body>
    <!--navbar part start-->
    @include('headfile')
    <!--navbar part end-->

    <!--package part start-->
    <section id="full_bd_package">
        <div class="container">
            <div class="row">
                @foreach ($birthdaypackages as $birthdaypackage)


                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="main_package text-center">
                        <div class="package_icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="package_top">
                            <span>{{ $birthdaypackage->birthday_package_name }}</span>
                        </div>
                        <div class="package_detail">
                            <ul>
                                @foreach ($birthdaypackage->birthdaypackageany as $item)
                                <li>{{ $item->birthday_package_description }}</li>
                                @endforeach
                            </ul>

                            <span>$<h2>{{ $birthdaypackage->birthday_package_price }}</h2>/Hour</span>
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
    <!--package part start-->

    <!--album part start-->
    <section id="full_album">
            <div class="container-fluid mb-5">
                <div class="row">
                    @foreach ($birthdays as $birthday)


                    <div class="col-md-3">
                        <div class="album_img">
                            <a href="{{ route('birthdaySingleImage',$birthday->id) }}">
                                <img class="w-100" src="{{ asset('birthdayfolder') }}/{{ $birthday->birthday_thumbnail }}" alt="">
                                <div class="overlay text-center">
                                    <span> {{ $birthday->birthday_name }}'s Birthday</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
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
