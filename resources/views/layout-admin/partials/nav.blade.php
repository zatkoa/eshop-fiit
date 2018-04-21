<nav class="up">
    <ul class="row nav-menu">
        <li class="col-12"><a href="{{ url('/admin/products') }}">Správa produktov</a></li>
        <ul>
            @foreach($categoryList as $category)
                <li><a href="{{ url('/admin/category/' . $category->id) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
        <li class="col-12"><a href="#">Chat</a></li>
    </ul>
</nav>