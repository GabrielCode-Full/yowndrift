{{-- http://127.0.0.1:8000/login
    https://yowndrift.herokuapp.com/home --}}
@if($url == "https://yowndrift.herokuapp.com/login" || $url == "https://yowndrift.herokuapp.com/register") 
@elseif($url == "https://yowndrift.herokuapp.com/home") 
<nav class="navbar navbar-expand-md navbar-dark bg-bokara-grey">
    <div class="container">
        {{-- For logo --}}
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('img/logo/navbar_logo.png') }}" alt="Yowndrift logo">
            {{ config('app.name', 'Laravel') }}
        </a>

        {{-- Toggle icon --}}
        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-block d-md-none mt-3">                 
                    <form class="form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="md-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>
                      </form>          
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/explore">Explore</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>

            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item mx-auto d-none d-md-block">                 
                    <form class="form-inline form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="formNav-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>

                        <div class="form-group form-search-button">
                            <button type="submit" class="btn btn-blue btn-sm">
                                <i class="fas fa-search"></i> 
                            </button>
                        </div>
                      </form>          
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav my-2 ml-md-auto ">
                <li class="nav-item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                        <label class="custom-control-label text-light" for="darkSwitch">Dark Mode</label>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-0 ml-md-3">
                <!-- Authentication Links -->
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Hello, {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">
                                <i class="fas fa-chalkboard mr-3"></i>Dashboard
                             </a>
                            <a class="dropdown-item" href="/account">
                                <i class="far fa-user-circle mr-3"></i>Account
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-3"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@elseif($url == "https://yowndrift.herokuapp.com/explore") 
<nav class="navbar navbar-expand-md navbar-dark bg-bokara-grey">
    <div class="container">
        {{-- For logo --}}
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('img/logo/navbar_logo.png') }}" alt="Yowndrift logo">
            {{ config('app.name', 'Laravel') }}
        </a>

        {{-- Toggle icon --}}
        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-block d-md-none mt-3">                 
                    <form class="form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="md-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>
                      </form>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/explore">Explore</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>

            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item mx-auto d-none d-md-block">                 
                    <form class="form-inline form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="formNav-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>

                        <div class="form-group form-search-button">
                            <button type="submit" class="btn btn-blue btn-sm">
                                <i class="fas fa-search"></i> 
                            </button>
                        </div>
                      </form>          
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav my-2 ml-md-auto ">
                <li class="nav-item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                        <label class="custom-control-label text-light" for="darkSwitch">Dark Mode</label>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-0 ml-md-3">
                <!-- Authentication Links -->
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Hello, {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">
                                <i class="fas fa-chalkboard mr-3"></i>Dashboard
                             </a>
                            <a class="dropdown-item" href="/account">
                                <i class="far fa-user-circle mr-3"></i>Account
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-3"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@elseif($url == "https://yowndrift.herokuapp.com/blog") 
<nav class="navbar navbar-expand-md navbar-dark bg-bokara-grey">
    <div class="container">
        {{-- For logo --}}
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('img/logo/navbar_logo.png') }}" alt="Yowndrift logo">
            {{ config('app.name', 'Laravel') }}
        </a>

        {{-- Toggle icon --}}
        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-block d-md-none mt-3">                 
                    <form class="form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="md-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>
                      </form>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/explore">Explore</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link active" href="/blog">Blog</a>
                </li>
            </ul>

            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item mx-auto d-none d-md-block">                 
                    <form class="form-inline form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="formNav-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>

                        <div class="form-group form-search-button">
                            <button type="submit" class="btn btn-blue btn-sm">
                                <i class="fas fa-search"></i> 
                            </button>
                        </div>
                      </form>          
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav my-2 ml-md-auto ">
                <li class="nav-item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                        <label class="custom-control-label text-light" for="darkSwitch">Dark Mode</label>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-0 ml-md-3">
                <!-- Authentication Links -->
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Hello, {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">
                                <i class="fas fa-chalkboard mr-3"></i>Dashboard
                             </a>
                            <a class="dropdown-item" href="/account">
                                <i class="far fa-user-circle mr-3"></i>Account
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-3"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-md navbar-dark bg-bokara-grey">
    <div class="container">
        {{-- For logo --}}
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('img/logo/navbar_logo.png') }}" alt="Yowndrift logo">
            {{ config('app.name', 'Laravel') }}
        </a>

        {{-- Toggle icon --}}
        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-block d-md-none mt-3">                 
                    <form class="form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="md-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>
                      </form>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/explore">Explore</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>

            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item mx-auto d-none d-md-block">                 
                    <form class="form-inline form-search" action="/blog">
                        <div class="form-group">
                            <input class="form-control form-control-sm" id="formNav-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                        </div>

                        <div class="form-group form-search-button">
                            <button type="submit" class="btn btn-blue btn-sm">
                                <i class="fas fa-search"></i> 
                            </button>
                        </div>
                      </form>          
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav my-2 ml-md-auto ">
                <li class="nav-item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                        <label class="custom-control-label text-light" for="darkSwitch">Dark Mode</label>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-0 ml-md-3">
                <!-- Authentication Links -->
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Hello, {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">
                                <i class="fas fa-chalkboard mr-3"></i>Dashboard
                             </a>
                            <a class="dropdown-item" href="/account">
                                <i class="far fa-user-circle mr-3"></i>Account
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-3"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@endif