@extends('layouts.master')
@section('title',$product->product_name)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('main') }}">Anasayfa</a></li>
            @foreach($categories as $category)
            <li><a href="{{ route('category', $category->slug) }}">{{ $category->category_name }}</a></li>
            @endforeach
            <li class="active">{{ $product->product_name }}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('uploads/product/' . $product->product->product_img) }}" style="width: 400px" height="250px">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="{{ asset('uploads/product/' . $product->product->product_img) }}"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="{{ asset('uploads/product/' . $product->product->product_img) }}"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="{{ asset('uploads/product/' . $product->product->product_img) }}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{ $product->product_name }}</h1>
                    <p class="price">{{ $product->price }}₺</p>
                    <form action="{{ route('add.cart') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="submit" class="btn btn-primary" value="Add Cart">
                    </form>
                </div>
            </div>
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#description" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="description">{!! $product->description !!}</div>
                    <div role="tabpanel" class="tab-pane" id="t2">No any comments</div>
                </div>
            </div>
        </div>
    </div>
@endsection
