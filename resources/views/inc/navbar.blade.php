<nav class="navbar navbar-expand-md navbar-dark bg-bokara-grey">
    <div class="container">
        {{-- For logo --}}
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('img/logo/navbar_logo.png') }}" alt="Yowndrift logo">
            {{ config('app.name', 'Laravel') }}
        </a>
        {{-- Toggle icon --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/explore">Explore</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Write">Write</a>
                    </li>
                @endauth
            </ul>

            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item mx-auto d-none d-md-block">                 
                    <form class="form-inline" action="/blog" style="position: relative;">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search" style="width: 250px;">
                        </div>

                        <div class="form-group form-button-search">
                            <button type="submit" class="btn btn-blue btn-sm">
                                <i class="fas fa-search"></i> 
                            </button>
                        </div>
                      </form>          
                </li>
                <li class="nav-item d-block d-md-none" id="hide-search">
                    <a href="#"><i class="fas fa-search text-light"></i></a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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
                            <a class="dropdown-item" href="#">
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
