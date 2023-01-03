@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="fs-1">Название товара</p>

                    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true" >
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/1.webp" class="d-block w-50 mx-auto" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/2.webp" class="d-block w-50 mx-auto" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/3.webp" class="d-block w-50 mx-auto" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                <p class="fs-1">Отзывы</p>
                <div class="shadow p-3 mb-5 bg-body rounded d-flex ">
                    <div class="">
                        <a href="#" class="link-dark text-decoration-none d-flex justify-content-center" >
                            <img src="https://github.com/mdo.png" alt="mdo" width="45" height="45" class="rounded-circle">
                        </a>
                        <p class="fw-lighter  d-block text-center mt-2">Client Namee</p>
                    </div>

                    <p class="fs-6 ps-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, est.</p>
                </div>
            </div>

            <div class="col-6">
                <p class="fs-1">Характеристики товара</p>
                <p class="fw-bold">Описание:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id officiis optio provident ut. Assumenda cumque ducimus,
                    eaque fuga iste iusto laboriosam laudantium maiores molestias quam, repellat repellendus totam ullam voluptate!
                </p>
                <p><span > Цвет: </span>Lorem</p>
                <p>Материал: Lorem ipsum</p>

                <div class="d-flex justify-content-between">
                    <p>Цена: </p>
                    <p class="fs-1"> 100 000 RUB</p>
                </div>


                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-warning btn-lg">В Избранное</button>
                    <button type="button" class="btn btn-outline-success btn-lg ms-3 ">В Корзину</button>
                </div>

            </div>

        </div>
    </div>

    <script>

    </script>
@endsection




