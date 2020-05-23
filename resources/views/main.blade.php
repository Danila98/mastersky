@extends('layouts')


@section('header')
		<section>
			<div class="slider">
				<div class="row">
					<div class="col-md-1"></div>
						<div class="col-md-10">
						<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="/img/slider/danse.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
								<h5>First slide label</h5>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="/img/slider/danse.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
								<h5>Second slide label</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="/img/slider/danse.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
								<h5>Third slide label</h5>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
								</div>
							</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5"></div>
					<div class='col-md-2'>
						<input type='submit' value="Оформить заказ" class="bth-default">
					</div>
					<div class="col-md-5"></div>					
				</div>	
			</div>
		</section>
		<section>
			<div class="home-products">
				<h3 class="head-home">Хиты продаж</h3>
				<div class="home-card-product">
					<div class="home-card-product-item">
						<img src="/img/products/card1.jpg" alt="" class="home-card-img">
						<h4 class="home-card-head">Название</h4>
						<p class="home-card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sed culpa, laudantium qui hic nam! Accusamus consequuntur similique non quos, ullam voluptate minus accusantium dolorum!</p>
						<input type="submit" value="Подробнее" class="home-card-btn bth-default">
					</div>
					<div class="home-card-product-item">
						<img src="/img/products/card1.jpg" alt="" class="home-card-img">
						<h4 class="home-card-head">Название</h4>
						<p class="home-card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sed culpa, laudantium qui hic nam! Accusamus consequuntur similique non quos, ullam voluptate minus accusantium dolorum!</p>
						<input type="submit" value="Подробнее" class="home-card-btn bth-default">
					</div>
					<div class="home-card-product-item">
						<img src="/img/products/card1.jpg" alt="" class="home-card-img">
						<h4 class="home-card-head">Название</h4>
						<p class="home-card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sed culpa, laudantium qui hic nam! Accusamus consequuntur similique non quos, ullam voluptate minus accusantium dolorum!</p>
						<input type="submit" value="Подробнее" class="home-card-btn bth-default">
					</div>
				</div>
				<h3 class="head-home">Наши Услуги</h3>
			</div>
		</section>
		<section class="">
			
			<div class="services-home-cards">
				<a href="" class="services-home-link">
					<div class="services-card">
						<img src="/img/icon/Машинка.svg" alt="" class="services-img">
						<span class="services-name">Пошив Одежды</span>
					</div>
				</a>
				<a href="" class="services-home-link">
					<div class="services-card">
						<img src="/img/icon/Мнкен.svg" alt="" class="services-img">
						<span class="services-name">Ребрендинг Одежды</span>
					</div>
				</a>
				<a href="" class="services-home-link">
					<div class="services-card">
						<img src="/img/icon/Ножнц.svg" alt="" class="services-img">
						<span class="services-name">Ремонт Одежды</span>
					</div>
				</a>
				<a href="" class="services-home-link">
					<div class="services-card">
						<img src="/img/icon/Метр.svg" alt="" class="services-img">
						<span class="services-name">Подгон по фигуре</span>
					</div>
				</a>
				<a href="" class="services-home-link ">
					<div class="services-card">
							<img src="/img/icon/вязь.svg" alt="" class="services-img">
							<span class="services-name">Вязание Изделий</span>
					</div>
				</a>
			</div>
		</section>
		<section>
			<div class="news">
				<div class="news-up">
					<h3 class="head-home">Новости</h3>
					<a href="/news">
						<div class="news-cards">
							<div class="news-card-item">
								<img src="/img/products/AirBrush_20191008115519.jpg" alt="" class="news-img">
								<div class="news-body-home">
									<h4 class="news-head">Lorem ipsum dolor sit amet.</h4>
									<p class="news-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias at sint optio id voluptates modi assumenda dolore odit distinctio error.</p>
								</div>
							</div>
						</div>
					</a>
					<a href="/news">
						<div class="news-cards">
							<div class="news-card-item">
								<img src="/img/products/AirBrush_20191008115519.jpg" alt="" class="news-img">
								<div class="news-body-home">
									<h4 class="news-head">Lorem ipsum dolor sit amet.</h4>
									<p class="news-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias at sint optio id voluptates modi assumenda dolore odit distinctio error.</p>
								</div>
							</div>
						</div>
					</a>
					<a href="/news">
						<div class="news-cards">
							<div class="news-card-item">
								<img src="/img/products/AirBrush_20191008115519.jpg" alt="" class="news-img">
								<div class="news-body-home">
									<h4 class="news-head">Lorem ipsum dolor sit amet.</h4>
									<p class="news-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias at sint optio id voluptates modi assumenda dolore odit distinctio error.</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="news-form-banner">
					<h5 class="form-head">Не нашли, что искали? 
						Заполните заявку и мы с вами свяжемся!</h5>
					<form action="">
						<div class="news-form">
							<input type="text" class="form-input" name="name" placeholder="Ваше Имя">
							<input type="phone" class="form-input" name="phone" placeholder="Номер Телефона">
							<div class="chek-form">
								<input type="checkbox" name="check">
								<span>Согласие на обработку персональных данных</span>
							</div>
							<input type="submit" class="bth-default ">
						</div>
					</form>
				</div>
			</div>
			
		</section>
	@endsection