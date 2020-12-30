<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark font-weight-bold">
        <a class="navbar-brand" href="{{route('home')}}"><img src="/img/logo.png" width="80" height="80" alt=""
                loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item dropdown m-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{route('appsByCategory', ['category' => $category->name])}}">{{$category->name}}</a>
                        @endforeach
                        <a class="dropdown-item" href="{{route('apps')}}">Todas las apps</a>
                    </div>
                </li>
                
            </ul>
        
    </nav>
    <div class="panel-session bg-purple d-lg-flex py-2 px-2">
        @if (Auth::user() != null)
        <div class="dropdown mx-3">
            <span class="dropdown-toggle font-weight-bold" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Hola, <span class="capitalize-first-letter">{{Auth::user()->name}}</span>
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{route('appList', ['id' => Auth::user()->id])}}">Mis Apps</a>
                @if (Auth::user()->hasRole('dev'))
                <a class="dropdown-item" href="{{route('appCreate')}}">Añadir App</a>
                @endif
                <a class="dropdown-item" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{route('userLogout')}}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        @else
        <div class="font-weight-bold mx-3">
            <a class="link-white mr-3" href="{{route('login')}}">Iniciar sesión</a>
            <a class="link-white" href="{{route('register')}}">Registrarse</a>
        </div>
        @endif
    </div>
</header>