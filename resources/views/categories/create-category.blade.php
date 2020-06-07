@extends('home')

@section('content')
<h3 class='profile-username'>Создать статью</h3>
        <div class="content-profile">
            <form action="/createCategoriesArticle" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name='user' value="{{auth()->user()->id}}">
            
                <div class="profile-data">
                <select class="profile-input" size="1" name="type" id="">
                    <option value="1">Товар</option>
                    <option value="2">Статья</option>
                </select>
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="name" id="">
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                </div> 
            </form>
        </div>
@endsection