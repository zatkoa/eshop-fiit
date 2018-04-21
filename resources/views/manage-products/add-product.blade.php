@extends('layout-admin.app')

@push('links')
    <link href="{{ asset('css/admin/manage-products/add-products.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container add-product">
        <h2>Pridanie nového produktu</h2>
        <form action="/admin/products" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="product-name">Názov produktu</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="product-name" placeholder="Názov" name="name" value="{{ old('name') }}" autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                </div>
                <div class="form-group col-md-6">
                    <label for="product-category">Kategória</label>
                    <select id="product-category" class="form-control" name="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $loop->first ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="product-price">Cena (eur)</label>
                    <input type="text" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" id="product-price" placeholder="15.49" name="price" value="{{ old('price') }}">
                    @if ($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="product-quantity">Množstvo</label>
                    <input type="number" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" id="product-quantity" placeholder="1" name="quantity" value="{{ old('quantity') }}">
                    @if ($errors->has('quantity'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('quantity') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="product-descr1">O produkte</label>
                    <textarea class="form-control {{ $errors->has('descr1') ? ' is-invalid' : '' }}" id="product-descr1" rows="3" name="descr1">{{ old('descr1') }}</textarea>
                    @if ($errors->has('descr1'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('descr1') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="product-descr2">Zloženie</label>
                    <textarea class="form-control {{ $errors->has('descr2') ? ' is-invalid' : '' }}" id="product-descr2" rows="3" name="descr2">{{ old('descr2') }}</textarea>
                    @if ($errors->has('descr2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('descr2') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="product-descr3">Použitie</label>
                    <textarea class="form-control {{ $errors->has('descr3') ? ' is-invalid' : '' }}" id="product-descr3" rows="3" name="descr3">{{ old('descr3') }}</textarea>
                    @if ($errors->has('descr3'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('descr3') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}" id="product-image" name="file" >
                    {{--<label class="custom-file-label" for="product-image">Vyber obrázok</label>--}}
                    @if ($errors->has('file'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
            <div class="form-row button-nav">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <a href="{{  url('/admin/products') }}"class="btn btn-block btn-lg">Späť</a>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-block btn-lg">Pridať produkt</button>
                </div>
            </div>
        </form>
    </div>
@endsection