{{--<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">--}}

{{--<!-- Bootstrap core CSS -->--}}
{{--<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">--}}
{{--<nav class="site-header sticky-top py-1">--}}
{{--    <div class="container d-flex flex-column flex-md-row justify-content-between">--}}
{{--        <a class="py-2" href="/">{{config('app.name', 'LSAPP')}} </a>--}}
{{--        <a class="py-2 d-none d-md-inline-block" href="/">Home</a>--}}
{{--        <a class="py-2 d-none d-md-inline-block" href="/about">About</a>--}}
{{--        <a class="py-2 d-none d-md-inline-block" href="/services">Services</a>--}}
{{--        <a class="py-2 d-none d-md-inline-block" href="/posts">Surveys</a>--}}
{{--        <a class="py-2 d-none d-md-inline-block" href="/posts/create">Create Post</a>--}}

{{--    </div>--}}
{{--</nav>--}}

<nav class="navbar navbar-expand-lg navbar-white bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <a class="navbar-brand" href="/home">Home</a>

        <a class="navbar-brand" href="{{ url('/about')}}">About</a>

        <a class="navbar-brand" href="{{ url('/services') }}">Services</a>

        <a class="navbar-brand" href="{{ url('/posts') }}">Surveys</a>

{{--        <a class="navbar-brand" href="/posts/create">Create Post</a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">Create Post</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
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
