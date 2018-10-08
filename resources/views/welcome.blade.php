@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 text-white text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold mt-sm-5">TIIA <small>(Tecnologia Informatica e Innovacion Argentina)</small></h1>
                        <hr class="hr-light">
                        <h6 class="mb-4">En TIIA pensamos, diseñamos y hacemos sitios web y aplicaciones usables, entendibles y fáciles de administrar.
                            La combinación perfecta entre Diseño y Programación.</h6>
                        <a class="btn btn-primary">ver mas</a>

                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Main info-->
            <section class="mt-5 wow fadeIn">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <p class="lead  my-5">Nuestros desarrollos se focalizan en la necesidad puntual del cliente ya sea el control de stock la integración con sistemas de facturación o publicar un catalogo de productos on-line, ponemos a disposición de la empresa un grupo de trabajo que logra cumplir los requerimientos del cliente.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Main info-->



            <hr class="mb-5">
            <section class="my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">Nuestras Membresias</h2>
                <!-- Section description -->
                <p class="text-center w-responsive mx-auto mb-5">
                    Para empezar se requiere dejarnos un mensaje en la parte contacto de esta página o un mensaje a "contacto@tisaempresa.com.ar" .
                    El presupuesto básico de la página inicia de los 3000$ ARS.
                </p>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

                        <!-- Pricing card -->
                        <div class="card pricing-card">

                            <!-- Price -->
                            <div class="price header white-text blue rounded-top">
                                <h2 class="number">10</h2>
                                <div class="version">
                                    <h5 class="mb-0">Basic</h5>
                                </div>
                            </div>

                            <!-- Features -->
                            <div class="card-body striped mb-1">

                                <ul>
                                    <li>
                                        <p class="mt-2"><i class="fa fa-check green-text pr-2"></i>20 GB Of Storage</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>2 Email Accounts</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text pr-2"></i>24h Tech Support</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text pr-2"></i>300 GB Bandwidth</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text pr-2"></i>User Management </p>
                                    </li>
                                </ul>
                                <button class="btn btn-blue">Buy now</button>

                            </div>
                            <!-- Features -->

                        </div>
                        <!-- Pricing card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

                        <!-- Pricing card -->
                        <div class="card pricing-card">

                            <!-- Price -->
                            <div class="price header white-text indigo rounded-top">
                                <h2 class="number">20</h2>
                                <div class="version">
                                    <h5 class="mb-0">Pro</h5>
                                </div>
                            </div>

                            <!-- Features -->
                            <div class="card-body striped mb-1">

                                <ul>
                                    <li>
                                        <p class="mt-2"><i class="fa fa-check green-text pr-2"></i>20 GB Of Storage</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>4 Email Accounts</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>24h Tech Support</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text pr-2"></i>300 GB Bandwidth</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text pr-2"></i>User Management</p>
                                    </li>
                                </ul>
                                <button class="btn btn-indigo">Buy now</button>

                            </div>
                            <!-- Features -->

                        </div>
                        <!-- Pricing card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6">

                        <!-- Pricing card -->
                        <div class="card pricing-card">

                            <!-- Price -->
                            <div class="price header white-text deep-purple rounded-top">
                                <h2 class="number">30</h2>
                                <div class="version">
                                    <h5 class="mb-0">Enterprise</h5>
                                </div>
                            </div>

                            <!-- Features -->
                            <div class="card-body striped mb-1">

                                <ul>
                                    <li>
                                        <p class="mt-2"><i class="fa fa-check green-text pr-2"></i>30 GB Of Storage</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>5 Email Accounts</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>24h Tech Support</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>300 GB Bandwidth</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text pr-2"></i>User Management</p>
                                    </li>
                                </ul>
                                <button class="btn btn-deep-purple">Buy now</button>

                            </div>
                            <!-- Features -->

                        </div>
                        <!-- Pricing card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
        </div>
    </main>
    <!--Main layout-->
@endsection