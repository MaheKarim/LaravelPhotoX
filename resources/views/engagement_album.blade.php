@include('master')

<body>
    <!--navbar part start-->
    @include('headfile')
    <!--navbar part end--

    <!--package part start-->
    <section id="full_engage_package">
        <div class="container">
            <div class="row">
                @foreach ($engagementpackages as $engagementpackage)


                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="main_package text-center">
                        <div class="package_icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="package_top">
                            <span>{{ $engagementpackage->engagement_package_name }}</span>
                        </div>

                        <div class="package_detail">
                            <ul>


                                @foreach ($engagementpackage->package as $item)
                                <li>{{ $item->engagement_package_description }}</li>
                                @endforeach


                            </ul>

                            <span>$<h2>{{ $engagementpackage->engagement_package_price }}</h2>/Hour</span>
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
    @include('album')
    <!--album part start-->

    <!--footer part start-->
   @include('footer')
    <!--footer part end-->
   @include('js')
</body>

</html>
