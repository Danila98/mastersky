@extends('layouts')
@section('title', 'Личный кабинет')
@section('header')

<div class="profile">
    <div class="left-site-bar">
        <img src="/img/profile-photo.png" alt="" class="avatar-left-site-bar">
        <nav class="profile-navigation">
            <a href="{{url('profile')}}"><li class="profile-navigation-item">Профиль</li></a>
            <a href="{{url('myArticles')}}"><li class="profile-navigation-item">Статьи</li></a>
            <a href=""><li class="profile-navigation-item">Избранное</li></a>
        </nav>
    </div>
    <div class="main-profile">
    @yield('content')
    
    </div>
</div>
@endsection