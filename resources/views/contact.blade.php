@include('master')

<body>
    <!--navbar part start-->
    @include('headfile')
    <!--navbar part end-->

    @if ( session('alert-success') )
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alert-success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
    @endif


    <!--contact part start-->
    <section id="main_contact">
        <div class="contact_top">
            <div class="container contact_form">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="contact_txt text-center">
                            <span>-------Do you need------- <h3>photographer?</h3></span>
                            <p>Checkout Our packages and Features.</p>
                        </div>
                    </div>




                    <div class="col-md-8">
                        <div class="col-md-8 full_contact_form m-auto">
                            <p><span>Contact</span> Me</p>


                    @include('contactform')


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_contact">

        </div>
    </section>
    <!--contact part end-->

    <!--address part start-->
    <section id="full_address">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="address">
                        <ul>
                            <li><i class="fas fa-map-pin"></i> <span>Herston, Brisbane, Queensland, Australia 4006</span></li>
                            <li><i class="fas fa-mobile-alt"></i> <span>0470548519</span> </li>
                            <li><i class="far fa-envelope"></i> <span>thecameraboyphotos@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14159.852507642143!2d153.01429537883115!3d-27.47040728785654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a045cf620bb%3A0x502a35af3de84c0!2sBrisbane+City+QLD+4000%2C+Australia!5e0!3m2!1sen!2sbd!4v1544263323253" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--address part end-->

    <!--footer part start-->
   @include('footer')
    <!--footer part end-->

   @include('js')
</body>

</html>
