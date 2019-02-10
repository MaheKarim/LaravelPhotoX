@auth
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ asset('/') }}admin/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span> <!--change to offline or busy as needed-->
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


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Sample Pages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
          </div>
      </li>
      {{--<li class="nav-item sidebar-actions">--}}
        {{--<span class="nav-link">--}}
          {{--<div class="border-bottom">--}}
            {{--<h6 class="font-weight-normal mb-3">Projects</h6>--}}
          {{--</div>--}}
          {{--<button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>--}}
          {{--<div class="mt-4">--}}
            {{--<div class="border-bottom">--}}
              {{--<p class="text-secondary">Categories</p>--}}
            {{--</div>--}}

          {{--</div>--}}
        {{--</span>--}}
      {{--</li>--}}
    </ul>
  </nav>
@endauth
