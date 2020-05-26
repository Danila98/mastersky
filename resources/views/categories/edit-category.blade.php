@extends('home')

@section('content')
<h3 class='profile-username'>Редактирование статьи</h3>
        <div class="content-profile">
            <form action="/categoriesArticle/{{$category->id}}" method="post" enctype="multipart/form-data">   
            {{method_field('PATCH')}}
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$category->id}}">
                <div class="profile-data">
                    <label class="profile-label" for="">Название</label>
                        <input class="profile-input" type="text" name="name" value="{{$category->name}}" id="">
                        <input class="bth bth-reg bth-profile" value="Сохранить" type="submit">
                        </form>
                        <form action="/categoriesArticle/{{$category->id}}" method="post">   
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                            <input class="bth bth-reg bth-profile" value="Удалить" type="submit">
                        </form>
                </div> 
            
        </div>
@endsection