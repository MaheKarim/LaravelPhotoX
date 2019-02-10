@include('master')

<body>
    <!--navbar part start-->
    @include('headfile')
    <!--navbar part end-->

    <!--about part start-->
    <section id="full_about">
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="about_img">
                    @foreach ($categories as $category )
                        <img class="w-100" src="{{ asset('aboutfolder/'.$category->category_image) }}" alt="">
                    @endforeach
                    <div class="overlay">
                        <span>
                            The Camera Boy
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach ($categories as $category )
                <div class="about_txt text-center">

                        <h3> {{ $category->category_name }}</h3>

                        <p> {{ $category->category_description }} </p>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
    <!--about part end-->

    <!--footer part start-->
   @include('footer')
    <!--footer part end-->



    @include('js')


</body>
</html>
