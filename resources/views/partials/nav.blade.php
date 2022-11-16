<nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('img/logo.png')}}" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Start Here</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">About</a>
                        </li>
                    </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>