<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">


    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Bank api</title>
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="images/newlogo.jpg">
    {{-- Sweet Alert cdn link --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- b5 - scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <!-- <div class="container"> -->
                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="{{ url('index2') }}"><img src="images/newlogo.jpg" ></a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ('Laravel') }}
                </a>
                <a class="navbar-brand" href="{{ url('/crud') }}">
                    {{ ('Operation') }}
                </a>

                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#services">Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item page-scroll" href="{{url('/project')}}">Project Details</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item page-scroll" href="{{url('/terms')}}">Terms Conditions</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item page-scroll" href="{{url('/privacy')}}">Privacy Policy</a>
                                    <!-- <div class="dropdown-divider"></div>      -->
                                </div>
                            </li>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                        <!-- operations -->
                        <li class="nav-item dropdown mr-4">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                {{-- @if(User_information::with('user')->get('image'))
                                    <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
                                @endif --}}
                                <a class="dropdown-item page-scroll">{{ Auth::user()->email }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="{{url('/newforms')}}">Update</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    <!-- <span class="nav-item social-icons">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> -->
                </div> <!-- end of navbar-collapse -->
           <!--  </div> --> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->
        @endelse
    </div>
    <div align="center">
        <br><br>@yield('content')
    </div>
</body>
</html>
