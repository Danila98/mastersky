@extends('home')

@section('content')
<h3 class='profile-username'>Создать статью</h3>
        <div class="content-profile">
            <form action="/articles" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name='user' value="{{auth()->user()->id}}">
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                        <input class="profile-input" type="file" name="file" id="photo">
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="title" id="">
                    <label class="profile-label" for="">Категория</label>
                        <select class="profile-input" size="1" name="categories_id" id="">
                            <option value="">Сшит из частей</option>
                            <option value="">Связан из частей</option>
                        </select>
                    <label class="profile-label" for="">Ссылка на источник</label>
                        <input class="profile-input" type="text" name="link" id="">
                    <label class="profile-label" for="">Текст</label>
                        <textarea class="profile-input " name="content" id="" cols="30" rows="20"></textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                </div> 
            </form>
        </div>
@endsection