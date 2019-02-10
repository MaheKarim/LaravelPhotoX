@if ( session('alert-success') )
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('alert-success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<form action="{{ url('contactsend') }}" method="POST">
    @csrf
    <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
        <input type="text" name="name" placeholder="Your Name">
    </div>
    <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
        <input type="email" name="mail" placeholder="Your Email">
    </div>
    <textarea name="msg" id="msg" cols="30" rows="3" placeholder="Message" class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s"></textarea>
    <div class="form-btn text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s">
        <a href="javascript:void(0)" onclick="document.querySelector('form').submit()">
            <p>Submit</p>
        </a>
    </div>
</form>