@extends('layouts')
@section('title', 'Личный кабинет')
@section('header')

<div class="profile">
    <div class="left-site-bar">
    @if(auth()->user()->avatar)
        <img src="/storage/{{auth()->user()->avatar}}" alt="" class="avatar-left-site-bar">
    @else
        <img src="/img/profile-photo.png" alt="" class="avatar-left-site-bar">
    @endif
        <nav class="profile-navigation">
            <a href="{{url('profile')}}"><li class="profile-navigation-item">Профиль</li></a>
            <a href="{{url('myArticles')}}"><li class="profile-navigation-item">Статьи</li></a>
            <a href=""><li class="profile-navigation-item">Избранное</li></a>
            @if(auth()->user()->isAdmin === 1)
            <a href="{{url('products')}}"><li class="profile-navigation-item">Работы</li></a>
            <a href="{{url('news')}}"><li class="profile-navigation-item">Новости</li></a>
            <a href="{{url('categoriesArticle')}}"><li class="profile-navigation-item">Категории Статей</li></a>
            <a href=""><li class="profile-navigation-item">Категории Товаров</li></a>
            @endif
        </nav>
    </div>
    <div class="main-profile">
    @yield('content')
    
    </div>
</div>
@endsection