
@extends('home')
@section('title', 'Мои статьи')
@section('content')
<h4 class="product-head">Продукция</h4>
                    <div class="product-list">
                        <div class="products-search">
                            <div class="bth-product"> 
                                <form class="form-search" action="">
                                    <input class="search" placeholder="Поиск..." type="text">
                                    <a class="icon-search" ><img src="img/icon/search.svg" alt=""></a>
                                </form>
                            </div>
                        </div>
                        <a href="products/create"><input class="bth bth-reg bth-articles" value="Добавить товар" type="submit"></a>
                        <div class="products-items">
                            @foreach($products as $product )
                            @foreach($files as $file)
                            @if ($product->id == $file->product)
                            <a href="products/{{$product->id}}" class="product-link">
                                <div class="products-item">
                                    <input type="hidden" value="{{$product->id}}">
                                    <img  src="/storage/{{$file->url}}" alt="" class="product-img">
                                    <div class="product-card">
                                        <h2 class="product-item">{{$product->name}}</h2>
                                        <p class="product-description">{{$product->description}}</p>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                    </div>
@endsection