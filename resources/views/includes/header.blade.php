<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="image/blog_logo.svg" class="img-fluid rounded " alt="Logo">
                    @yield('brand_name')
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- center Of Navbar -->
                   @auth
                    <ul class="navbar-nav mx-md-auto pl-5">
                    <li class="nav-item">
                         <a class="nav-link" href="/world_article">World</a></li>
                         <li class="nav-item">
                         <a class="nav-link" href="/world_article">Sports</a></li>
                         <li class="nav-item">
                         <a class="nav-link" href="/world_article">Opinion</a></li>
                         <li class="nav-item">
                         <a  class="nav-link" href="/world_article">Lifestyle</a></li>
                         <li class="nav-item">
                         <a class="nav-link" href="/world_article">Business</a></li>
                         <li class="nav-item">
                           <a class="nav-link" href="#">Culture</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">Fashion</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#">Tech</a>
                         </li>
                    </ul>
                    @endauth

                   @guest
                    <ul class="navbar-nav mx-md-auto pl-5">
                    </ul>
                    @endguest

                    {{-- <ul class="navbar-nav mx-md-auto pl-5">
                    @yield('nav')
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>