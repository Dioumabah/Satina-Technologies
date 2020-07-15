 <!-- Start header -->
 <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('root_path')}}"><img src="{{asset('images/logo.png')}}" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li class="{{ set_active_route('root_path') }}"><a class="nav-link active" href="{{ route('root_path')}}">
                        <i class="fa fa-home"></i> Home</a></li>
                        <!-- <li><a class="nav-link" href="{{ route('about_path')}}">Aboutus</a></li> -->
                        <!-- <li><a class="nav-link" href="cycv.html">create your cv</a></li> -->
                        <!-- <li><a class="nav-link" href="{{ route('contact_path')}}">Contact Us</a></li> -->

                        @auth
                        <li class="{{ set_active_route('etudiant.index') }}"><a class="nav-link active" href="{{ route('etudiant.index')}}">
                        <i class="fa fa-users"></i> Etudiant</a></li>
                        <li class="{{ set_active_route('client.index') }}"><a class="nav-link active" href="{{ route('client.index')}}">
                        <i class="fa fa-user"></i> Client</a></li>
                        <li class="{{ set_active_route('facture.index') }}"><a class="nav-link active" href="{{ route('facture.index')}}">
                        <i class="fa fa-print"></i> Facture</a></li>
                        @endauth
                    </ul>
                    <ul class="navbar-nav navbar-right ml-auto">
                    @guest
                        <li class="nav-item {{ set_active_route('login') }}">
                            <a class="nav-link" href="{{ route('login') }}"> {{ __('Se connectez') }}</a>

                        </li>
                        <li class="nav-item {{ set_active_route('register') }}">@if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"> {{ __('S\'inscrire') }}</a>
                            @endif
                        </li>
                            @else
                            <ul>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-wrench"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off" aria-hidden="true"></i> {{ __('SE DECONNECTER') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                                </form>
                                </div>
                            </li>
                        </ul>

                    @endguest
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="{{('images/search_icon.png')}}" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
