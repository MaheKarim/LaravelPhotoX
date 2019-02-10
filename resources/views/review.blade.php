@include('master')

<body>

    <!--nav bar part start-->
    @include('headfile')
    <!--nav bar part end-->

    <!--review banner part start-->
    <section id="full_re_banner">
        <div class="banner">
            <h1>Capture your special moment for Lifetime</h1>
        </div>
    </section>
    <!--review banner part end-->

    <!--review part start-->
    <section id="full_review">
        <div class="container">
            <div class="review_head">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="">Client <span>Review</span></p>
                            </div>
                            <div class="col-md-8">
                                <h3>Some words from my clients</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_review">
            <div class="container">

                @foreach($reviews as $review)
                <div class="row">
                    <div class="col-md-8">
                        <div class="row row_line">
                            <div class="col-md-4 rev_img">
                                <img class="w-100"  src="{{ asset('reviewpost/'.$review->image) }}"   alt="">
                            </div>
                            <div class="col-md-8 rev_comment">
                                <p> {{ $review->comment }} </p>
                                <strong>{{ $review->name }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach

                @if ( session('sentNotifications') )
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('sentNotifications') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
            <!-- Session End -->


                <div class="post_rev col-md-6">
                    <form method="POST" action="{{ route('reviewpost') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" name="name" class="form-control" id="" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" placeholder="Comment" rows="3"></textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile"> + Add Attachment</label>
                        </div>
                        <button type="submit" class="btn mt-3">Post </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--review part start-->



    <!--footer part start-->
    @include('footer')
    <!--footer part end-->



   @include('js')
</body>

</html>
