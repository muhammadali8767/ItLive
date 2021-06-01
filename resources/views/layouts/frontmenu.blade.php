
<div class="collapse navbar-collapse " id="main-menu">
    <ul class="nav  ml-auto justify-content-center align-items-center ">
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/') }}">Bosh Sahifa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('cources') }}">Kurslar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('team') }}">Jamoa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
        </li>
        <div class="reg d-flex align-items-center mt-sm-3 mt-lg-0">
        @guest
            <a href="{{ route('login') }}" class="nav-link sign_in">Kirish</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-link sign_out">Ro'yxatdan o'tish</a>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle sign_out" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin panel</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </div>

    </ul>
</div>