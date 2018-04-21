@extends('layout-admin.app')

@push('links')
    <link href="{{ asset('css/admin/manage-products/detail.css') }}" rel="stylesheet">
@endpush

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="modal fade edit-modal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="close-right-top"><i class="large material-icons close" data-dismiss="modal" >close</i></div>
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <section class="container-fluid detail-whole">
                        <div class="row">
                            <div class="detail-image col-md-6 ool-sm-12">
                                <img src="{{ asset("obr/shampoo-827141_1920.jpg") }}" alt="detailna fotka samponu">
                            </div>
                            <section class="detail-main-info col-md-6 d-flex flex-column">
                                <h1 contenteditable="true" class="title">Názov produktu, ktorý môze byť kľudne dlhší</h1><i class="large material-icons edit-title">edit</i>
                                <div class="price"><span contenteditable="true">15.49 eur</span><i class="large material-icons edit-price">edit</i></div>
                                <a class="btn" href="#" role="button"><div class="add-to-chart">Pridať do košíka</div></a>
                            </section>
                            <section class="detail-description col-12 order-3">
                                <!-- List group -->
                                <ul class="list-group" id="myList" role="tablist">
                                    <li><a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">O produkte</a></li>
                                    <li><a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Zloženie</a></li>
                                    <li><a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Použitie</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <p contenteditable="true">Tento produkt je vlastnoručne vyrobený thajským dodávateľom, ktorý bla bla bla bla bla</p>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel">
                                        <p contenteditable="true">Zloženie je velmi pekne bla bla bla bla bla bla bla aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <p contenteditable="true">Vôbec netuším čo tu napísať...</p>
                                    </div>
                                    <i class="large material-icons edit-descr">edit</i>
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-save ">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap sortby-search-add">
        <form action='{{ url('/admin/filter') }}' method='POST' class="col-6 col-sm-3 order-2 order-sm-1 sort-by">
            <select onchange="this.form.submit()" id="sort-by" class="form-control"  name="filter">
                <option disabled selected>Zoradiť podľa</option>
                <option value="alphabet">Abecedy</option>
                <option value="price">Ceny</option>
            </select>
        </form>
        <form action='{{ url('/admin/search') }}' method='POST' class="search-bar col-12 col-sm-6 order-1 order-sm-2">
            @csrf
            <input class="form-control mr-sm-2 w-100" type="text" value="{{ isset($oldSearch) ? $oldSearch : "" }}" name='searchString' placeholder="Vyhľadávať" aria-label="Search">
            <button type="submit" class="btn submit-search" ><i class="large material-icons search" >search</i></button>
        </form>
        <div class="col-6 col-sm-3 order-3 add">
            <a href="{{ url('admin/products/create') }}" ><button type="button" class="btn w-100" id="add-product">Pridať produkt</button></a>
        </div>
    </div>
    <div>
        <table class="products">
            <thead>
            <tr>
                <th>#</th>
                <th>Obrázok</th>
                <th>Názov produktu</th>
                <th>Kategória</th>
                <th>Cena (eur)</th>
                <th>Počet kusov</th>
                <th>Náhľad</th>
                <th>Upraviť</th>
                <th>Vymazať</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/products-images/' . $product->image) }}"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    {{--<td><div class="quantity"><i class="fa fa-minus-circle"></i>{{ $product->available_quantity }}<i class="fa fa-plus-circle"></i></div></td>--}}
                    <td>{{ $product->available_quantity }}</td>
                    <td><a href="#" data-toggle="modal" data-target=".edit-modal"><i  class="large material-icons edit">edit</i></a></td>
                    <td><a href="{{ URL::to('/admin/products/' . $product->id) . "/edit" }}"><i  class="large material-icons edit">edit</i></a></td>
                    <td>
                        <form id='delete_form' action="{{ url('/admin/products', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <a href="javascript:{}" onclick="document.getElementById('delete_form').submit();">
                                <i class="large material-icons delete">delete</i>
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <nav aria-label="Strankovanie produktov">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
