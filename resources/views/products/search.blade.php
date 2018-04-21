@extends('layout.app')

@push('scripts')
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main-page.js') }}"></script>
@endpush

@push('links')
    <!-- SLICK CSS - MAIN USAGE FOR CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link href="{{ asset('css/products/product-list.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products/search.css') }}" rel="stylesheet">

@endpush


@section('content')
    <h1>Výsledky vyhľadávania pre "Mydlá".</h1>

    <section class="container search-results">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="product">
                        <div>
                            <img src="{{ "obr/1.png"  }}" alt="produkt">
                        </div>
                        <div class="product-description">
                            <p>Nazov produktu bude tu asi, mozno aj dlhsi nazov</p>
                            <div class="product-price">
                                <span>9.99eur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection