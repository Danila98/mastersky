
@extends('home')
@section('title', 'Мои статьи')
@section('content')
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
                            @if (auth()->user()->id == $article->user)
                            <a href="myArticles/{{$article->id}}" class="product-link">
                                <div class="products-item">
                                    <input type="hidden" value="{{$article->article_id}}">
                                    <img  src="/img/products/AirBrush_20191013100137.jpg" alt="" class="product-img">
                                    <div class="product-card">
                                        <h2 class="product-item">{{$article->title}}</h2>
                                        <p class="product-description">{{$article->content}}</p>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </div>
@endsection