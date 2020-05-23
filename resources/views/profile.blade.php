@extends('home')

@section('content')
<h3 class='profile-username'>{{auth()->user()->name}}</h3>
        <div class="content-profile">
            <form action="">
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                        <input class="profile-input" type="file" name="" id="">
                    <label class="profile-label" for="">Имя</label>
                        <input class="profile-input" type="text" name="" value="{{auth()->user()->name}}" id="">
                    <label class="profile-label" for="">Фамилия</label>
                        <input class="profile-input" type="text" name="" id="">
                    <label class="profile-label" for="">Отчество</label>
                        <input class="profile-input" type="text" name="" id="">
                    <label class="profile-label" for="">День рождения</label>
                        <input class="profile-input" type='data' name="" id="">
                    <label class="profile-label" for="">Город</label>
                        <input class="profile-input" type="text" name="" id="">
                    <label class="profile-label" for="">О себе</label>
                        <textarea class="profile-input " name="" id="" cols="30" rows="10"></textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                </div> 
            </form>
        </div>
@endsection