
@extends('home')
@section('title', 'Мои статьи')
@section('content')
<h4 class="product-head">Список новостей</h4>
                    <div class="product-list">
                        <!-- <div class="products-search">
                            <div class="bth-product"> 
                                <form class="form-search" action="">
                                    <input class="search" placeholder="Поиск..." type="text">
                                    <a class="icon-search" ><img src="img/icon/search.svg" alt=""></a>
                                </form>
                            </div>
                        </div> -->
                        <a href="news/create"><input class="bth bth-reg bth-articles" value="Добавить новость" type="submit"></a>
                        <div class="products-items">
                            @foreach($news as $new)
                            @foreach($files as $file)
                            @if ($new->id == $file->news)
                            <a href="news/edit/{{$new->id}}" class="product-link">
                                <div class="products-item">
                                    <input type="hidden" value="{{$new->id}}">
                                    <img  src="/storage/{{$file->url}}" alt="" class="product-img">
                                    <div class="product-card">
                                        <h2 class="product-item">{{$new->name}}</h2>
                                        <p class="product-description">{{$new->text}}</p>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                    <script>
                        let news = document.querySelectorAll('.product-description');
                            for(let i = 0; i < news.length; i++){
                                let text = news[i].innerHTML.substr(0, 100);
                                news[i].textContent = text;
                                
                            }
                    </script>
@endsection