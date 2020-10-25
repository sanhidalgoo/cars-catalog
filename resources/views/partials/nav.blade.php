<nav>

    <ul>
        <li class="{{ setActive('home') }}"> <a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"> <a href="{{ route('about') }}">About</a></li>
        {{-- <li class="{{ setActive('autos.*') }}"> <a href="{{ route('autos.index') }}">Catalog</a></li> --}}
        <li class="{{ setActive('contact') }}"> <a href="{{ route('contact') }}">Contact</a></li>

    </ul>
</nav>