@extends('home')
@section('title', 'Редактирование статьи')
@section('content')
<h3 class='profile-username'>Редактирование статьи</h3>
        <div class="content-profile">
            <form action="/myArticles/{{$data['article']->id}}" method="post" enctype="multipart/form-data">   
            {{method_field('PATCH')}}
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$data['article']->id}}">
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                    <img src="/storage/{{$data['files']->url}}" alt="">
                        <input class="profile-input" type="file" name="file" id="">
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="title" value="{{$data['article']->title}}" id="">
                    <label class="profile-label" for="">Категория</label>
                        <select class="profile-input" size="1" name="categories_id"  id="">
                        @foreach($data['categories'] as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    <label class="profile-label" for="">Ссылка на источник</label>
                        <input class="profile-input" type="text" name="link" value="{{$data['article']->link}}" value="" id="">
                    <label class="profile-label" for="">Текст</label>
                        <textarea class="profile-input " name="content" id="" value="" cols="30" rows="20">{{$data['article']->content}}</textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                        </form>
                        <form action="/myArticles/{{$data['article']->id}}" method="post">   
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                            <input class="bth bth-reg bth-profile" value="Удалить" type="submit">
                        </form>
                </div> 
            
        </div>
@endsection