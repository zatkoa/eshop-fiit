
@extends('layout.app')

@push('scripts')
    <script src="{{ asset('js/product.js') }}"></script>
@endpush

@push('links')
    <link href="{{ asset('css/products/product-list.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="img-category">
        <img src="{{ asset('storage/category-images/' . $category->image) }}" class="img-fluid" alt="Obrazok vybranej kategorie">
    </div>
    <section class="shop container">
        <section class="filter">
            <h1>Mydlá</h1>
            <div class="categories">
                <h2>Kategórie</h2>
                <nav>
                    <ul>
                        <li>Všetko</li>
                        <li>Mydlá</li>
                        <li>Šampóny</li>
                        <li>Krémy</li>
                    </ul>
                </nav>
            </div>
            <div class="smell">
                <h2>Vône</h2>
                <ul>
                    <li>
                        <div class="custom-control custom-checkbox checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="smell1">
                            <label class="custom-control-label" for="smell1">
                                Levanduľová
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="smell12">
                            <label class="custom-control-label" for="smell12">
                                Mangová
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <section class="filter-mobile">
                        <div class="widget-title">
                            <fieldset class="box-title"><legend align="center">Mydlá<br></legend>
                            </fieldset>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-block btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"  >
                                Filter
                            </button>
                            <div class="dropdown-menu drop-down-filter" aria-labelledby="dropdownMenuButton1">
                                <!--<div class="price">-->
                                <!--<h2>Cena</h2>-->
                                <!--</div>-->
                                <div class="smell">
                                    <h2>Vône</h2>
                                    <ul>
                                        <li>
                                            <div class="custom-control custom-checkbox checkbox">
                                                <input class="custom-control-input" type="checkbox" value="" id="smell3">
                                                <label class="custom-control-label" for="smell3">
                                                    Levanduľová
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox checkbox">
                                                <input class="custom-control-input" type="checkbox" value="" id="smell14">
                                                <label class="custom-control-label" for="smell14">
                                                    Mangová
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4 order-by">
                    <div class="dropdown">
                        <button class="btn btn-block btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Zoradiť podľa
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#">Ceny</a>
                            <a class="dropdown-item" href="#">Abecedy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($category->products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <a href="{{ url('/products/'.$product->id) }}">
                                <div>
                                    <img src="{{ asset('storage/products-images/' . $product->image) }}" alt="produkt">
                                </div>
                                <div class="product-description">
                                    <p>{{ $product->name }}</p>
                                    <div class="product-price">
                                        <span>{{ $product->price }} eur</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>

@endsection