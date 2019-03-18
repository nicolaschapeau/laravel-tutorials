<nav class="navbar navbar-default" style="background: white; border-bottom: 1px solid #eee;">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-header d-flex flex-row justify-content-between align-items-center" id="bs-example-navbar-collapse-1" style="width: 100%;">
            <ul class="nav navbar-nav d-flex flex-row justify-content-between align-items-center col-2" style="max-width: 200px;">
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Popular</a></li>
            </ul>
            <ul class="nav navbar-nav col-3 d-flex flex-row justify-content-between align-items-center flex-row-reverse" style="min-width: 150px; max-width: 400px;">
                <a href="#" class="btn btn-primary" style="margin-top:5px; width: 150px;">Ask A Question</a>
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
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                    <li class="nav-item">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>