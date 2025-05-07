@extends('layouts.admin')



@section('content')

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row ">

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Multiple targets</h5>
                        <div class="card-body">
                            <p class="card-text">Show and hide multiple elements by referencing them with a selector.</p>

                            <p class="demo-inline-spacing">
                                <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                    Toggle second element
                                </button>
                                <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                                    Toggle both elements
                                </button>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4 mb-md-0">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="d-grid d-sm-flex p-4 border">
                                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/elements/2.jpg" alt="collapse-image" height="125" class="me-6 mb-sm-0 mb-2">
                                            <span>
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="d-grid d-sm-flex p-4 border">
                                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/elements/3.jpg" alt="collapse-image" height="125" class="me-6 mb-sm-0 mb-2">
                                            <span>
                                                 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>


            <div class="row mt-10px">

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Multiple targets</h5>
                        <div class="card-body">
                            <p class="card-text">Show and hide multiple elements by referencing them with a selector.</p>

                            <p class="demo-inline-spacing">
                                <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                    Toggle second element
                                </button>
                                <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                                    Toggle both elements
                                </button>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4 mb-md-0">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="d-grid d-sm-flex p-4 border">
                                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/elements/2.jpg" alt="collapse-image" height="125" class="me-6 mb-sm-0 mb-2">
                                            <span>
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="d-grid d-sm-flex p-4 border">
                                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/elements/3.jpg" alt="collapse-image" height="125" class="me-6 mb-sm-0 mb-2">
                                            <span>
                                                 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

        </div>

@endsection
