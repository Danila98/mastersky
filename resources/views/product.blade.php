@extends('layouts')


@section('header')
    <div class="product-page">
        <div class="product-photo">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/products/card1.jpg" class="d-block w-100 product-photo-item" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/products/card1.jpg" class="d-block w-100 product-photo-item" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/products/card1.jpg" class="d-block w-100 product-photo-item" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="product-description">
            <h2>Название</h2>
            <p class="description-product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis laudantium possimus explicabo, culpa nam minus itaque! Voluptates est eum, inventore quis harum minima labore dolore placeat vel provident nesciunt modi velit debitis impedit. Impedit, tempore optio pariatur iusto amet velit quasi sed officiis facere perspiciatis, earum ipsum ab aliquam?</p>
            <span class="product-option">Размеры:</span>
            <span class="product-option">Мастер:Оля</span>
            <span class="product-option">Оценка</span>
            <input type="submit" class="bth-default bth-product-item">
        </div>
    </div>
    <section>
        <div class="news">
            <div class="news-up">
                <h3 class="head-home">Отзывы</h3>
                <a href="">
                    <div class="news-cards">
                        <div class="news-card-item">
                            <img src="/img/profile-photo.png" alt="" class="news-img">
                            <div class="news-body-home">
                                <h4 class="news-head">Бананчик</h4>
                                <p class="news-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias at sint optio id voluptates modi assumenda dolore odit distinctio error.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="news-cards">
                        <div class="news-card-item">
                            <img src="/img/profile-photo.png" alt="" class="news-img">
                            <div class="news-body-home">
                                <h4 class="news-head">Трансформатор4000</h4>
                                <p class="news-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias at sint optio id voluptates modi assumenda dolore odit distinctio error.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="news-cards">
                        <div class="news-card-item">
                            <img src="/img/profile-photo.png" alt="" class="news-img">
                            <div class="news-body-home">
                                <h4 class="news-head">я у мамы дурачок</h4>
                                <p class="news-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias at sint optio id voluptates modi assumenda dolore odit distinctio error.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    </section>
    @endsection
