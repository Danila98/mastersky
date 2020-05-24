@extends('home')

@section('content')
<h3 class='profile-username'>{{auth()->user()->name}}</h3>
        <div class="content-profile">
            <form action="/user/{{auth()->user()->id}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                        <input class="profile-input" type="file" name="avatar" id="">
                    <label class="profile-label" for="">Имя</label>
                        <input class="profile-input" type="text" name="name" value="{{auth()->user()->name}}" id="">
                    <label class="profile-label" for="">Фамилия</label>
                        <input class="profile-input" type="text" name="firstname" value="{{auth()->user()->firstname}}"  id="">
                    <label class="profile-label" for="">Отчество</label>
                        <input class="profile-input" type="text" name="patronymic" value="{{auth()->user()->patronymic}}"  id="">
                    <label class="profile-label" for="">День рождения</label>
                        <input class="profile-input" type='date' name="dateOfBirth" value="{{auth()->user()->dateOfBirth}}"  id="">
                    <label class="profile-label" for="">Город</label>
                        <input class="profile-input" type="text" name="town" value="{{auth()->user()->town}}"  id="">
                    <label class="profile-label" for="">О себе</label>
                        <textarea class="profile-input " name="description" id="" cols="30" rows="10">{{auth()->user()->description}}</textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                </div> 
            </form>
        </div>
@endsection