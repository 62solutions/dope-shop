@extends('layouts.main')

@section('content')

    <div class="container">
        <p class="fs-1">Корзина</p>
        <div class="row">
            <div class="col-8">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название товара</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Стоимость</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="fs-4">1</th>
                        <td class="fs-4">Наименование продукта</td>
                        <td class="fs-4">6000</td>
                        <td>
                            <div class="btn-group " role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-primary">+</button>
                                <span class="p-2 fs-4">2</span>
                                <button type="button" class="btn btn-outline-primary">-</button>
                            </div>
                        </td>
                        <td class="fs-4">12000</td>
                    </tr>

                    </tbody>
                </table>

                <div class="d-flex justify-content-end ">
                    <p>Общая стоимость <span class="fs-4 m-1"> 12000 </span> </p>
                </div>



                <button type="button" class="btn btn-primary btn-lg">Вернуться к покупкам</button>
                <button type="button" class="btn btn-secondary btn-lg">Перейти к оформлению</button>


            </div>


        </div>
    </div>


@endsection




