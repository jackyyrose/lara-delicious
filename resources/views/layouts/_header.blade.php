<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name')}}</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
            <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">User List</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    {{Auth::user()->name}}
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">Personal Center</a>
                    <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="logout" href="#">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-block btn-danger" type="submit" name="button">Logout</button>
                        </form>
                    </a>
                </div>
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign In</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('signup')}}">Sign Up</a></li>
            @endif
            <li class="nav-item"><a class="nav-link" href="{{route('help')}}">Contact Us</a></li>
        </ul>
    </div>
</nav>
