<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <li class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">

            <li @if($current=="home" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home</a>
            </li>
            <li @if($current=="clientes" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/clientes">Clientes</a>
            </li>
            <li @if($current=="animais" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/animais">Animais</a>
            </li>
            <li @if($current=="consultas" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/consultas">Consultas</a>
            </li>

            <div class="container" style="margin-left: 93rem;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

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
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Reistrar') }}</a>
                        </li>
                        @endif

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
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
        </ul>
    </li>
</nav>