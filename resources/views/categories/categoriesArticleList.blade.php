
@extends('home')
@section('title', 'Мои статьи')
@section('content')
<div class="news-page">
            <h4 class="product-head">Категории для статей</h4>
            <a href="categoriesArticle/create"><input class="bth bth-reg bth-articles" value="Добавить Категорию" type="submit"></a>
            <table>
                <div class="news-item">
                <tr>
                    <th>Номер</th>
                    <th>Название</th>
                    <th>Тип</th>
                    <th>Дата создания</th>
                </tr>
                @foreach($categoriesArticle as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="/categoriesArticle/{{$category->id}}">{{$category->name}}</a></td>
                    @if($category->type == 1)
                    <td>Товар</td>
                    @elseif($category->type == 2)
                    <td>Статья</td>
                    @endif
                    <td>{{$category->created_at}}</td>
                </tr>
                @endforeach
            </table>
            
        </div>
@endsection