<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="wrap">
		<header class="header">
			<div class="head-up">
				<div class="head-text-img"></div>
				<div class="head-buttons-right">
					<div class="bth bth-search"> 
						<form class="form-search" action="">
							<input class="search" placeholder="Поиск по сайту" type="text">
							<a class="icon-search" ><img src="img/icon/search.svg" alt=""></a>
						</form>
					</div>
					@if (Route::has('login'))
                		<div class="registration">
							@auth
								<a href="{{ url('profile') }}"> <input class="bth bth-reg" value="Личный кабинет" type="button"></a>
								<a href="/logout"> <input class="bth bth-reg" value="Выход" type="button"></a>
							@else
								<a href="{{ route('login') }}"> <input class="bth bth-reg" value="Вход/Регистрация" type="button">
									
								</a>		
							@endauth
						</div>
            		@endif
					<!-- <div class="registration"> <a href="{{ route('register') }}"> <input class="bth bth-reg" value="Вход/Регистрация" type="button"></a></div> -->
				</div>
			</div>
			<nav class="head-nav">
				<li><a href="/"><img src="img/icon/home.svg" alt=""></a></li>
				<!-- <li><a href=""> Новости</a></li> -->
				<li><a href="/catalog"> Продукция</a></li>
				<li><a href="/articles"> Статьи</a></li>
				<li><a href="/reviews"> Отзывы</a></li>
				<li><a href=""> Как заказать?</a></li>
				<li><a href=""> Услуги</a></li>
				<!-- <li><a href=""><img src="img/icon/basket.svg" alt=""></a></li> -->
			</nav>
        </header>

		@yield('header')
		@yield('register')
        <footer class="footer">
			<div class="footer-nav">
				<ul class="footer-contacts">
					<li>Делаем руками, делаем с любовью!</li>
					<li><a href="mailto:kopalovang@mail.ru">kopalovang@mail.ru</a></li>
					<li>© 2020 Екатеринбург</li>
				</ul>
			</div>
			
			<ul class="footer-link">
				<li class="footer-link-item"><img src="/img/icon/inst.svg" alt=""></li>
				<li class="footer-link-item"><img src="/img/icon/vk.svg" alt=""></li>
			</ul>
		</footer>
	</div>
	





<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>





