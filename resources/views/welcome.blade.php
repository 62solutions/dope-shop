@extends('layouts.main')

@section('content')
    <div class="container" style="min-height: 600px">
        <div class="row">
            <div class="col-3 ">
                <ul class="list-unstyled">

                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-3" data-bs-toggle="collapse" data-bs-target="#cat1-collapse" aria-expanded="false">
                            Category 1
                        </button>
                        <div class="collapse" id="cat1-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal fs-5 pb-1">
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-3" data-bs-toggle="collapse" data-bs-target="#cat2-collapse" aria-expanded="false">
                            Category 2
                        </button>
                        <div class="collapse" id="cat2-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal fs-5 pb-1">
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <div class="mt-5">
                    <div class="d-flex justify-content-center">
                        <p class="">ФИЛЬТР</p>
                    </div>

                    <p class="mb-0 mt-1">Бренд</p>
                    <select class="form-select mb-3" aria-label="size 3 select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>


                    <p class="mb-0 mt-1">Цена</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="от">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="до">
                    </div>

                    <p class="mb-0 mt-1">Цвет</p>
                    <select class="form-select mb-1" aria-label="size 3 select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>



                </div>

            </div>
            <div class="col-9">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>

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
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
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




