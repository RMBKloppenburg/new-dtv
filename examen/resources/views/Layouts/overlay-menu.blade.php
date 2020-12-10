<section class="overlay-menu">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <ul>
                    <li>
                        <a href="/">Homepagina</a>
                    </li>
                    <li>
                        <a href="/over-DTV">Over ons</a>
                    </li>
                    <li>
                        <a href="{{route('klantkantine')}}">Kantine</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Registreer</a>
                    </li>
                </ul>
{{--                <div>--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <div>--}}
{{--                            @auth--}}
{{--                                <a href="{{ url('/home') }}">Home</a>--}}
{{--                            @else--}}
{{--                                <a href="{{ route('login') }}">Login</a>--}}

{{--                                @if (Route::has('register'))--}}
{{--                                    <a href="{{ route('register') }}">Register</a>--}}
{{--                                @endif--}}
{{--                            @endauth--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}

        </div>
    </div>
</section>
