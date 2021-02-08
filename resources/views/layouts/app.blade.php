<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    ">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                                    <?php
                                         $email = Auth::user()->name;
                                         $HASH = md5($email);
                                         $src = "https://www.gravatar.com/avatar/$HASH";
                                         echo '<img height="30" width="30" src="'.$src.'">';
                              ?>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @auth
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-2">
                <div class="list-group accordion" id="accordionExample">
  <div class="list-group-item">
    <div  id="headingOne">
      <h4 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Categories
        </button>
      </h4>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('categories.index') }}"> Gallery Categories</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{route('testimonials.index')}}">Testimonials-category</a>
                        </li>
                    </ul>
    </div>
  </div>
  <div class="list-group-item">
    <div  id="headingTwo">
      <h4 class="mb-0">
        <a href="{{route('galleries.index')}}" class="btn btn-link collapsed"  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Gallery</a>
      </h4>
    </div>
  </div>


  <div class="list-group-item">
    <div  id="headingThree">
      <h4 class="mb-0">
      <a href="{{route('testimonials.index')}}" class="btn btn-link collapsed"  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Testimonials</a>
      </h4>
    </div>

  </div>

  @can('user-only', Auth::user())
  <div class="list-group-item">
    <div  id="headingTwo">
      <h4 class="mb-0">
        <a href="{{route('reports.index')}}" class="btn btn-link collapsed"  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">User's Report</a>
      </h4>
    </div>
  </div>
  @endcan

  <div class="list-group-item">
    <div  id="headingThree">
      <h4 class="mb-0">
      <a href="{{route('testimonials.index')}}" class="btn btn-link collapsed"  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Products</a>
      </h4>
    </div>

  </div>

</div>
                </div>
                <div class="col-md-10">
                @yield('content')
                </div>
            </div>
            @else
            @yield('content')
            @endauth
            </div>
        </main>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
@yield('scripts')
@stack('js')

</body>
</html>
