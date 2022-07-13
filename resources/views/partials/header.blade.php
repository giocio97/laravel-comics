<header>
    <a href="">
        <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
    </a>
    <nav>
        <ul class="navlist">

            @foreach ($arrNav as $navlink)
                <li>
                    <a href="{{ $navlink['url'] }}">{{ $navlink['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>

</header>
