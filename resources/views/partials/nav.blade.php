<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="nav nav-pills">

                <li class="nav-item">
                    <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('cars.*') }}" href="{{ route('cars.index') }}">
                        Catalog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                @else
                    <a href="#" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                        Logout</a>
                @endguest

            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none">
    @csrf
</form>
