<header>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <i class="large material-icons menu btn">menu</i>
                <!--<img src="logo_pattern.svg" class="logo" alt="logo znacky saumy">-->
                <span class="title-saumy"><a href="{{ url('/admin/products') }}">saUmy.sk</a></span>
            </div>
            <div class="col-7 log-in-out">
                <span class="logged-in">Prihlásený: {{ Auth::user()->name }}</span>

                <a href="#" onclick="event.preventDefault();
                                   document.getElementById('logout-form-nav-up').submit();">
                    Odhlásiť sa
                </a>

            <form id="logout-form-nav-up" action="{{ route('logout') }}" method="POST" style="display: none;">
                <input type="hidden" name="form" value="admin">
                @csrf
            </form>

            </div>
        </div>
    </div>
</header>