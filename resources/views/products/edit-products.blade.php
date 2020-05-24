@extends('home')

@section('content')
<h3 class='profile-username'>Редактирование статьи</h3>
        <div class="content-profile">
            <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">   
            {{method_field('PATCH')}}
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$product->id}}">
                <div class="profile-data">
                    <label class="profile-label" for="">Фото</label>
                    <img src="/storage/{{$files->url}}" alt="">
                        <input class="profile-input" type="file" name="file" id="">
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="name" value="{{$product->name}}" id="">
                    <label class="profile-label" for="">Категория</label>
                        <select class="profile-input" size="1" name="categories"  id="">
                            <option value="1">Сшит из частей</option>
                            <option value="2">Связан из частей</option>
                        </select>
                    <label class="profile-label" for="">Текст</label>
                        <textarea class="profile-input " name="description" id="" value="" cols="30" rows="20">{{$product->description}}</textarea>
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                        </form>
                        <form action="/products/{{$product->id}}" method="post">   
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                            <input class="bth bth-reg bth-profile" value="Удалить" type="submit">
                        </form>
                </div> 
            
        </div>
@endsection