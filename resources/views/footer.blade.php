<section id="full_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">


                <div class="footer_logo">
                    {{--<img class="w-50" src="{{ asset('/') }}front-end/Images/dummy-logo-pinkpurple-small.png" alt="">--}}
                    @foreach($logochanges as $logochange)
                        <img class="w-50" src="{{ asset('logo/'.$logochange->logo) }}" alt="">
                    @endforeach
                </div>

                <div class="social mt-5">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="col-md-12">
            <p>©2018 All Right Resurved By The Camera Boy</p>
        </div>

    </div>
</section>
