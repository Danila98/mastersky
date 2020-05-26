@extends('layouts')
@section('header')

<section>
    <div class="article">
        <div class="article-body">
            <div class="article-head"><h2>{{$data['article']->title}}</h2></div>
            <img class="article-img" src="/storage/{{$data['files']->url}}" alt="">
            <div class="article-text"><p>{{$data['article']->content}}</p></div>
            <div class="article-options">
                <div class="article-author">
                @foreach($data['users'] as $user)
                @if($user->id == $data['article']->user)
                    <div class="author">Автор:<a href="">{{$user->name}}</a></div>
                @endif
                @endforeach
                @foreach($data['categories'] as $category)
                @if($category->id == $data['article']->categories_id)
                    <div class="author">Категория:<a href="">{{$category->name}}</a></div>
                @endif
                @endforeach
                    <div class="likes">10 <img src="" alt=""></div>
                </div>
                <span class="date">{{$data['article']->created_at}}</span>
            </div>
        </div>
    </div>
</section>

@endsection