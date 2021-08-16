<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('asset/css/style.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
      <script
      src="https://kit.fontawesome.com/92d931270a.js"
      crossorigin="anonymous"
    ></script>

    @livewireStyles

    <title>Cato Networks</title>


  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="/index.html">Cato Networks</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mx-lg-4 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/experience">Experience</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="/dedicated"
                    >Dedicated Internet Access</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/ethernet"
                    >Ethernet Access</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/edge">Edge SD-WAN</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/broadband"
                    >Broadband internet access</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/dedicatedcloud"
                    >Dedicated cloud connection</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/hybrid"
                    >Hybrid dynamic networks</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/wildix">Wildix</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/customer"
                    >Customer premises equipment</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/fieldservice"
                    >Field service</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/casestudies">Case studies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.catonetworks.com/resources">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.catonetworks.com/partners">Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/smartfibre">Smart Fibre</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="https://client.phpradius.com/login.php?i=6773210/"
                >Client Portal</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="https://www.catonetworks.com/cato-sase-cloud/"
                >Products</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contactus">Contact Us</a>
            </li>


            @if (Route::has('login'))
             @auth
                    @if (Auth::user()->utype === 'ADM')
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Welcome ({{Auth::admin()->name}})
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                        @csrf
                        </form>
                    </ul>
                    </li>

               @else

                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Welcome ({{Auth::user()->name}})
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                        @csrf
                        </form>
                    </ul>
                    </li>

               @endif

                @else
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a> </li>
                @endif

            @endif


          </ul>
        </div>
      </div>
    </nav>

   @yield('content')


    <div>
      <div class="">
        <div class="row p-lg-4">
          <div class="col">
            <p class="state">
              GLOBAL MANAGEMENT AND LOCAL EXPERTISE IN THE AFRICAN CONTINENT
            </p>
            <p class="state1">
              Our local teams of experts enable us to deploy connectivity
              solutions in a broad array of places and conditions, from big
              cities to rural areas. Our clients have the ideas, we make them
              happen
            </p>
          </div>
          <div class="col">
            <p class="state">
              FLEXIBILITY TO CONNECT REGARDLESS OF DISTANCE OR OBSTACLES
            </p>
            <p class="state1">
              Our local teams of experts enable us to deploy connectivity
              solutions in a broad array of places and conditions, from big
              cities to rural areas. Our clients have the ideas, we make them
              happen
            </p>
          </div>
          <div class="col">
            <p class="state">
              INDUSTRY LEADING SERVICE AGREEMENTS WITH FLEXIBILITY AND
              SCALABILITY IN MIND
            </p>
            <p class="state1">
              Our local teams of experts enable us to deploy connectivity
              solutions in a broad array of places and conditions, from big
              cities to rural areas. Our clients have the ideas, we make them
              happen
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer d-flex justify-content-center">
      <div>
        <p>Cato Networks 2021 | All rights reserved | Notice of Privacy</p>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    @livewireScripts
  </body>
</html>
