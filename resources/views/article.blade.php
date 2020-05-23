@extends('layouts')
@section('header')

<section>
    <div class="article">
        <div class="article-body">
            <div class="article-head"><h2>{{$article->title}}</h2></div>
            <img class="article-img" src="/img/products/AirBrush_20191013100137.jpg" alt="">
            <div class="article-text"><p>{{$article->content}}</p></div>
            <div class="article-options">
                <div class="article-author">
                    <div class="author">Автор:<a href="">{{$article->user}}</a></div>
                    <div class="likes">10 <img src="" alt=""></div>
                </div>
                <span class="date">{{$article->created_at}}</span>
            </div>
        </div>
    </div>
</section>

@endsection