@extends('layouts')
@section('title', '{{$data['article']->title}}')
@section('header')

<section>
    <div class="article">
        <div class="article-body">
        @if(isset($data['message']['good']))
        <div class="alert alert-success" role="alert">{{$data['message']['good']}}</div>
        @endif
        @if(isset($data['message']['error']))
        <div class="alert alert-danger" role="alert">{{$data['message']['error']}}</div>
        @endif
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
<section>
        <div class="news">
            <div class="news-up">
                <h3 class="head-home">Отзывы</h3>
                @foreach($data['users'] as $user)
                @foreach($data['comments'] as $comment)
                @if($user->id == $comment->user)
                    <div class="news-cards">
                        <div class="news-card-item">
                            <img src="/storage/{{$user->avatar}}" alt="" class="news-img">
                            <div class="news-body-home">
                                <h4 class="news-head">{{$user->name}}</h4>
                                <p class="news-text">{{$comment->comment}}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                @endforeach
                @if(Auth::user())
                <form action="/commentCreate" method="POST">
                @csrf
                <input type="hidden" name="article" value="1">
                <input type="hidden" name="articleID" value="{{$data['article']->id}}">
                        <div class="news-cards">
                            <div class="news-card-item">
                                @if(  auth()->user()->avatar)
                                    <img src="/storage/{{auth()->user()->avatar}}" alt="" class="news-img">
                                @else
                                    <img src="/img/profile-photo.png" alt="" class="news-img">
                                @endif
                                <div class="news-body-home">
                                @if(auth()->user()->avatar)
                                    <h4 class="news-head">{{auth()->user()->name}}</h4>
                                @else
                                    <h4 class="news-head">я у мамы дурачок</h4>
                                @endif
                                    <textarea cols="98" name='comment' class="news-text form-control" placeholder="Оставьте комментарий..." ></textarea>
                                    <input class="btn btn-info mt-2" value="Оставить комментарий" type="submit">
                                </div>
                            </div>
                        </div>
                </form>
                @endif
            </div>
        </div>
        
    </section>
@endsection