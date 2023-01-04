@extends('layouts.main')

@section('content')


    <div class="container" style="min-height: 600px;">
        <p class="fs-1">Личный кабинет</p>
        <div class="row">
            <div class="col-8">
                <p class="fs-3">Мои заказы</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Дата</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Стоимость</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="fs-4">22.03.2022</th>
                        <td class="fs-4"><a href="">Наименование заказа</a> </td>
                        <td class="fs-4">6000</td>
                    </tr>
                    <tr>
                        <th scope="row" class="fs-4">22.03.2022</th>
                        <td class="fs-4"><a href="">Наименование заказа</a> </td>
                        <td class="fs-4">6000</td>
                    </tr>
                    <tr>
                        <th scope="row" class="fs-4">22.03.2022</th>
                        <td class="fs-4"><a href="">Наименование заказа</a> </td>
                        <td class="fs-4">6000</td>
                    </tr>

                    </tbody>
                </table>
                <br>
                <p class="fs-3">Избранное</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    </div>


@endsection




