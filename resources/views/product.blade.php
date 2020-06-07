@extends('layouts')

@section('title', '{{$data['products']->name}}')
@section('header')

    <div class="product-page">
    
        <div class="product-photo">
            <div class="big-photo">
                <div class="carousel-item active">
                @foreach($data['files'] as $file)
					@if($data['products']->id == $file->product && $file->first == 1)
                    <img src="/storage/{{$file->url}}" class="d-block w-100 product-photo-item" alt="..." id="big-photo">
                    @endif
					@endforeach   
                  </div>
                    
            </div>
                <div class="mini-photo">
                    @foreach($data['files'] as $file)
					@if($data['products']->id == $file->product)
                    <img class="mini-photo-item" src="/storage/{{$file->url}}" alt="">
                    @endif
					@endforeach   
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
    <script>
        document.addEventListener("click", function (e) {
            let img = e.target;
            if(img.className == 'mini-photo-item'){
                path = img.src;
                let bigPhoto = document.querySelector('#big-photo');
                bigPhoto.src = path;
            }
        });
</script>
    @endsection
