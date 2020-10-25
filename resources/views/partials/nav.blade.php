<nav>

    <ul>
        <li class="{{ setActive('home') }}"> <a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"> <a href="{{ route('about') }}">About</a></li>
        <li class="{{ setActive('cars.*') }}"> <a href="{{ route('cars.index') }}">Catalog</a></li>
        <li class="{{ setActive('contact') }}"> <a href="{{ route('contact') }}">Contact</a></li>

    </ul>
</nav>