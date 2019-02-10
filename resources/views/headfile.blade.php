<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand m-auto" href="{{ url('/') }}">
        {{--<img class=" mx-auto " src="{{ asset('/') }}front-end/Images/dummy-logo-pinkpurple-small.png" alt="">--}}
        @foreach($logochanges as $logochange)
            <img class="mx-auto" src="{{ asset('logo/'.$logochange->logo) }}" alt="">
        @endforeach
    </a>
</nav>
<section id="full_nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('wedding-album') }}">Wedding</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('engagment-album') }}">Engagment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('portraits-album') }}">Portraits</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('birthday-album') }}">Birthday</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('party-album') }}">Parties</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('review') }}">Client Review</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
</section>
