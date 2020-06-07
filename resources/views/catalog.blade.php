@extends('layouts')

@section('title', 'Каталог')
@section('header')
        <section>
      
            <div class="page-products">
                <form action="/searchProduct" method="post">
                @csrf
                <div class="page-products-filter">
                    <img src="/img/icon/logo.svg"  class="filter-logo" alt="">
                    <span>Категории</span>
                    <ul>
                    @foreach($data['categories'] as $category)
                    @if($category->type == 2)
                        <li class="filter-item">
                            <input name="category" value="{{$category->id}}" type="radio">
                            <label for="{{$category->name}}">{{$category->name}}</label>
                        </li>
                    @endif
                    @endforeach
                    </ul>
                    <input type="submit" value="искать" class="bth-default ">
                </div>
                </form>
                <div class="page-products-content">
                    <h4 class="product-head">Продукция</h4>
                    <div class="product-list">
                        <!-- <div class="products-search">
                            <div class="bth-product"> 
                                <form class="form-search" action="">
                                    <input class="search" placeholder="Поиск..." type="text">
                                    <a class="icon-search" ><img src="img/icon/search.svg" alt=""></a>
                                </form>
                            </div>
                        </div> -->
                        <div class="products-items">
                        @foreach($data['products'] as $product)
					    @foreach($data['files'] as $file)
					    @if($product->id == $file->product && $file->first == 1)
                            <a href="/product/{{$product->id}}" class="product-link">
                                <div class="products-item">
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
                </div>
            </div>
        </section>
        <script>
            let news = document.querySelectorAll('.product-description');
		        for(let i = 0; i < news.length; i++){
                    let text = news[i].innerHTML.substr(0, 100);
                    news[i].textContent = text;
		        }
        </script>
     @endsection