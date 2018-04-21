<footer>
    <div class="container-fluid">
        <div class="row">
            <section class="col-6 col-md-3 col-sm-6">
                <h2>Navigácia</h2>
                <nav>
                    <ul>
                        <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Domov</a></li>
                        <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Kategórie</a></li>
                        <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Blog</a></li>
                        <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Kontakt</a></li>
                        <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Obchodné podmienky</a></li>
                    </ul>
                </nav>
            </section>
            <section class="col-6 col-md-3 col-sm-6">
                <h2>Kategórie</h2>
                <ul>
                    @foreach ($categoryList as $category)
                        <li><a href="{{ asset('category/'.$category->id) }}"><i class="large material-icons chevron-left">chevron_left</i>{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </section>
            <section class="col-6 col-md-3 col-sm-6">
                <h2>Účet</h2>
                <ul>
                    <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Môj profil</a></li>
                    <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Moje objednávky</a></li>
                    <li><a href="#"><i class="large material-icons chevron-left">chevron_left</i>Nastavenie</a></li>
                </ul>
            </section>
            <section class="col-6 col-md-3 col-sm-6">
                <h2>Kontakt</h2>
                <div>
                    <a href="#"><span class="saumy">saUmy.sk</span><br></a>
                    <span class="address">Vavrisovo 325</span>
                </div>
            </section>
        </div>
    </div>
</footer>