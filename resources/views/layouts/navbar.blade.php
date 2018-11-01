<nav class="navbar navbar-expand">
    <a class="navbar-brand" href="//mediclinicsoftware.eu"><img src="{{asset('img/logo.png')}}" alt="Mediclinic"></a>
    <div class="circle"></div>
    <div class="menu">
        <ul class="navbar-nav mr-auto justify-content-end">
            @foreach($navs as $nav)
                <li class="nav-item">
                    <a class="nav-link" href="/{{$lang}}{{$nav['link']}}">{{$nav['title']}}</a>
                </li>
            @endforeach

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$lang}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: 100%">
                        <a class="dropdown-item" href="/en/{{$current_page}}"> <img src="{{asset('img/flag/en.svg')}}" style="width: 30px"> en</a>
                        <a class="dropdown-item" href="/de/{{$current_page}}"> <img src="{{asset('img/flag/de.svg')}}" style="width: 30px"> de</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="https://portal.mediclinic.com.au" class="btn btn-success btn-md text-uppercase"><i class="fas fa-sign-in"></i>Sign in</a>
                </li>
        </ul>


    </div>
    <div class="burger">
        <div class="x"></div>
        <div class="y"></div>
        <div class="z"></div>
    </div>
</nav>