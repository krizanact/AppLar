
@guest
                        <!-- Only login page possible without logging in. -->

@else

    <nav class="navbar navbar-expand-md navbar-inverse bg-dark navbar-laravel">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right navbar-inverse bg-dark ">
                                <a class="dropdown-item "id="link" href="{{ route('logout') }}"
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
