<header class="up">
    <div>
        <i class="large material-icons menu">menu</i>

        <div class="menu-title">
            <span class="first">mydlá.</span>
            <span class="second"><a href="{{ url('/') }}">sa<img src="{{ asset('obr/logo_pattern.svg') }}" alt="logo znacky saumy">my.sk</a></span>
            <span class="third ">krémy.</span>
        </div>
        <div class="icons">
            <div class="btn show-search-bar menu-item">
                <a href="#">
                    <i class="large material-icons search">search</i>
                    <span class="menu-item-title">Vyhľadávanie</span>
                </a>
            </div>
            <div class="menu-item">
                @auth
                    <a href="#"  id="dropdown-menu-account-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="login-name"><span>{{ Auth::user()->name[0] }}</span></div>
                        <span class="menu-item-title">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-account" aria-labelledby="dropdown-menu-account-btn">
                        <span>{{ Auth::user()->name . " " . Auth::user()->surname }}</span>
                        <hr>
                        <ul>
                            <li><a href="#">Môj profil</a></li>
                            <li><a href="#" onclick="event.preventDefault();
                                   document.getElementById('logout-form-nav-up').submit();"> Odhlásiť sa
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form id="logout-form-nav-up" action="{{ route('logout') }}" method="POST" style="display: none;">
                        <input type="hidden" name="form" value="user">
                        @csrf
                    </form>
                @else
                    <a href="#" data-toggle="modal" data-target=".bd-login-modal">
                        <i class="large material-icons person">person</i>
                        <span class="menu-item-title">Prihlásenie</span>
                    </a>
                @endauth
            </div>
            <div class="menu-item">
                <a href=" {{ route('cart') }}">
                    <i class="large material-icons shop">shopping_cart</i>({{ \Gloudemans\Shoppingcart\Facades\Cart::count() }})
                    <span class="menu-item-title">Košík</span>

                </a>

            </div>
        </div>
    </div>
    <div class="search-bar search-bar-menu">
        <form class="form-inline">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Vyhľadávaj..." aria-label="Search">
            <button type="submit" class="btn submit-search" ><i class="large material-icons search" >search</i></button>
        </form>
    </div>
</header>
