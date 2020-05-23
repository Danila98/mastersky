@extends('home')

@section('content')
<h3 class='profile-username'>Редактирование статьи</h3>
        <div class="content-profile">
            <form action="/myArticles/{{$article->id}}" method="post">   
            {{method_field('PATCH')}}
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$article->id}}">
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                        <input class="profile-input" type="file" name="" id="">
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="title" value="{{$article->title}}" id="">
                    <label class="profile-label" for="">Категория</label>
                        <select class="profile-input" size="1" name="categories_id"  id="">
                            <option value="">Сшит из частей</option>
                            <option value="">Связан из частей</option>
                        </select>
                    <label class="profile-label" for="">Ссылка на источник</label>
                        <input class="profile-input" type="text" name="link" value="{{$article->link}}" value="" id="">
                    <label class="profile-label" for="">Текст</label>
                        <textarea class="profile-input " name="content" id="" value="" cols="30" rows="20">{{$article->content}}</textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                        <form action="/myArticles/{{$article->id}}" method="post">   
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                            <input class="bth bth-reg bth-profile" value="Удалить" type="submit">
                        </form>
                </div> 
            </form>
        </div>
@endsection