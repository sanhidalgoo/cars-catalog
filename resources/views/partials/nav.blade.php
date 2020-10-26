<nav>

    <ul>
        <li class="{{ setActive('home') }}"> <a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"> <a href="{{ route('about') }}">About</a></li>
        <li class="{{ setActive('cars.*') }}"> <a href="{{ route('cars.index') }}">Catalog</a></li>
        <li class="{{ setActive('contact') }}"> <a href="{{ route('contact') }}">Contact</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Logout</a>
        @endguest

    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none">
    @csrf
</form>
