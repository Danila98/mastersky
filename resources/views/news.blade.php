@extends('layouts')


@section('header')
<div class="news-page">
            <h4 class="product-head">Новости</h4>
            <div class="news-item">
                <h3 class="product-head">{{$news->name}}</h3>
                <div class="news-body">
                    <div class="news-item-img"><img class="news-item-img" src="/storage/{{$files->url}}" alt=""></div>
                    <div class="news-item-description">
                        <p class="news-text">{{$news->text}}</p>
                        <div class="news-option">
                            <span class="news-name">Копалова Наталья</span>
                            <span class="news-date">{{$news->updated_at}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection