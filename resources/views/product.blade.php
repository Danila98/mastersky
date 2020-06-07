@extends('layouts')


@section('header')

    <div class="product-page">
    
        <div class="product-photo">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/products/card1.jpg" class="d-block w-100 product-photo-item" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/products/card1.jpg" class="d-block w-100 product-photo-item" alt="...">
                  </div>
                  @foreach($data['files'] as $file)
					@if($data['products']->id == $file->product)
                  <div class="carousel-item active">
                    <img src="/storage/{{$file->url}}" class="d-block w-100 product-photo-item" alt="...">
                  </div>
                    @endif
					@endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="product-description">
            <h2>{{$data['products']->name}}</h2>
            <p class="description-product">{{$data['products']->description}}</p>
            <span class="product-option">Размеры:</span>
            <span class="product-option">Мастер:Оля</span>
            <span class="product-option">Оценка</span>
            <input type="submit" class="bth-default bth-product-item">
        </div>
    </div>
    <section>
        <div class="news">
        @if(isset($data['message']['good']))
        <div class="alert alert-success" role="alert">{{$data['message']['good']}}</div>
        @endif
        @if(isset($data['message']['error']))
        <div class="alert alert-danger" role="alert">{{$data['message']['error']}}</div>
        @endif
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
                <input type="hidden" name="product" value="1">
                <input type="hidden" name="productID" value="{{$data['products']->id}}">
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
