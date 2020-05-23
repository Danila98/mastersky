@extends('layouts')


@section('header')
        <section>
            <div class="page-products">
                <form action="">
                <div class="page-products-filter">
                    <img src="/img/icon/logo.svg"  class="filter-logo" alt="">
                    <span>Категории</span>
                    <ul>
                        <li class="filter-item">
                            <input type="checkbox">
                            <label for="">Категория</label>
                        </li>
                        <li class="filter-item">
                            <input type="checkbox">
                            <label for="">Категория</label>
                        </li>
                        <li class="filter-item">
                            <input type="checkbox">
                            <label for="">Категория</label>
                        </li>
                    </ul>
                    <input type="submit" value="искать" class="bth-default ">
                </div>
                </form>
                <div class="page-products-content">
                    <h4 class="product-head">Мои статьи</h4>
                    <div class="product-list">
                        <div class="products-search">
                            <div class="bth-product"> 
                                <form class="form-search" action="">
                                    <input class="search" placeholder="Поиск..." type="text">
                                    <a class="icon-search" ><img src="img/icon/search.svg" alt=""></a>
                                </form>
                            </div>
                        </div>
                        <a href="myArticles/create"><input class="bth bth-reg bth-articles" value="Написать статью" type="submit"></a>
                        <div class="products-items">
                            @foreach($articles as $article )
                            <a href="product" class="product-link">
                                <div class="products-item">
                                    <input type="hidden" value="{{$article->article_id}}">
                                    <img  src="/img/products/AirBrush_20191013100137.jpg" alt="" class="product-img">
                                    <div class="product-card">
                                        <h2 class="product-item">{{$article->title}}</h2>
                                        <p class="product-description">{{$article->content}}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
     @endsection