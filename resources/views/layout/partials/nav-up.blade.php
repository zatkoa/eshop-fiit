<nav class="up">
    <div class="container">
        <div class="registration-login">
            @guest
                <div>
                    <a href="{{ asset("mobile/registration") }}"><span>Registrácia</span></a>
                </div>
                <div>
                    <a href="{{ asset("mobile/login") }}"><span>Prihlásenie</span></a>
                </div>
            @else
                <div>
                    <a href="#"><span>Profil - {{ Auth::user()->name }}</span></a>
                </div>
                <div>
                    <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>Odhlásiť</span>
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
        <div class="search-bar">
            <form class="form-inline">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button type="submit" class="btn submit-search" ><i class="large material-icons search" >search</i></button>
            </form>
        </div>
        <ul class="row">
            <li class="col-12 col-sm-3"><a href="{{ url('/') }}">Domov</a></li>
            <li id="categories" class="col-12 col-sm-3"><a href="#">Kategórie<i class="large material-icons arrow-down">arrow_drop_down</i></a>
                <ul class="category-menu">
                    @foreach ($categoryList as $category)
                        <li><a href="{{ asset('category/'.$category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="col-12 col-sm-3"><a href="#">Blog</a></li>
            <li class="col-12 col-sm-3"><a href="#">Kontakt</a></li>
        </ul>
    </div>
</nav>