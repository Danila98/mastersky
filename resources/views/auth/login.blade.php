@extends('layouts')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        <div class="news-form-banner">
					<h5 class="form-head">Не нашли, что искали? 
						Заполните заявку и мы с вами свяжемся!</h5>
					<form action="{{ route('login') }}">
					@csrf

						<div class="news-form">
							<input type="text" class="form-input" name="email" placeholder="email">
							<input type="password" name='password' class="form-input" name="phone" placeholder="пароль">
							<div class="chek-form">
								<input type="checkbox" name="check">
								<span>Согласие на обработку персональных данных</span>
							</div>
							<input type="submit" value="Войти" class="bth-default ">
							<a href="{{ route('register') }}">зарегистрироваться</a>
						</div>
					</form>
				</div>
            
        </div>
    </div>
</div>
@endsection
