@auth
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
              @foreach($logochanges as $logochange)
                  <img class="w-100" src="{{ asset('logo/'.$logochange->logo) }}" alt="">
              @endforeach
            <span class="login-status online"></span>
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
            <span class="text-secondary text-small">Project Manager</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('homepagesection') }}">
                <span class="menu-title">HomePage Section</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('category.index') }}">
          <span class="menu-title"> About Section </span>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('wedding') }}">
          <span class="menu-title">Wedding Section </span>
          <i class="mdi mdi-face menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="{{ route('engagementphotography') }}">
              <span class="menu-title">Engagement Photography </span>
              <i class="mdi mdi-face menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="{{ route('portraitsection') }}">
                  <span class="menu-title">Portrait Photography </span>
                  <i class="mdi mdi-face menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="{{ route('adminIndex') }}">
                      <span class="menu-title">Birthday Photography </span>
                      <i class="mdi mdi-face menu-icon"></i>
                    </a>
                  </li>
    <li class="nav-item">
                    <a class="nav-link" href="{{ route('partyadmin') }}">
                      <span class="menu-title">Parties Photography </span>
                      <i class="mdi mdi-face menu-icon"></i>
                    </a>
    </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviewpage') }}">
                          <span class="menu-title">Review Section </span>
                          <i class="mdi mdi-face menu-icon"></i>
                        </a>
                      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('contact_admin') }}">
          <span class="menu-title">Contact </span>
          <i class="mdi mdi-face menu-icon"></i>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Seetings</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('passchange') }}">
                Change Password
             </a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('logochange') }}">Logo Change</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
@endauth
