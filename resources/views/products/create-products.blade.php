@extends('home')

@section('content')
<h3 class='profile-username'>Создать статью</h3>
        <div class="content-profile">
            <form action="/products" method="post"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name='user' value="{{auth()->user()->id}}">
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                        <input class="profile-input" multiple type="file" name="files[]" id="photo">
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="name" id="">
                    <label class="profile-label" for="">Категория</label>
                        <select class="profile-input" size="1" name="categories" id="">
                            <option value="1">Сшит из частей</option>
                            <option value="2">Связан из частей</option>
                        </select>
                    <label class="profile-label" for="">Текст</label>
                        <textarea class="profile-input " name="description" id="" cols="30" rows="20"></textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                </div> 
            </form>
        </div>
@endsection