@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://www.digitalhouse.com/wp-content/themes/dh/assets/img/corporate_training.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="mask" style="background-color: rgba(0,0,0,0.7)">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 text-white text-center text-md-left my-5 wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold my-5">Sobre Nosotros</h1>
                    </div>
                    <!--Grid column
                    <div class="col-md-12 text-white text-center mt-5 pt-3 text-md-left mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold mt-sm-5">TIIA <small>(Tecnologia Informatica e Innovacion Argentina)</small></h1>
                        <hr class="hr-light">
                        <h6 class="mb-4">En TIIA pensamos, diseñamos y hacemos sitios web y aplicaciones usables, entendibles y fáciles de administrar.
                            La combinación perfecta entre Diseño y Programación.</h6>
                        <a class="btn btn-primary">ver mas</a>

                    </div>
                    <!--Grid column-->
                    <!--Grid column-
                    <div class="col-md-6 pt-4 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
                    </div>
                    Grid column-->
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <p class="lead  wow fadeInUp"><b class="h5">TIIA </b> (Tecnologia Informatica e Innovacion Argentina)
                    Es una creativa empresa de sistemas informáticos, enfocada en la pasión por la innovación
                    y la tecnología.</p>
                <hr>
                <p class="lead">Si eres cliente y estás leyendo esto, ¡Gracias por depositar tu confianza! Y si recién nos conoces, ¡Bienvenido! Será un placer ofrecerte el Servicio que necesitas.
                    <br>
                    ¿Quieres venir a conocernos? <a href="{{ route('contact') }}">Escribenos</a> y estaremos encantados de recibirte.</p>
            </div>
            <div class="col-md-6 wow fadeIn">
                <img src="https://bbvaopen4u.com/sites/default/files/styles/big-image/public/img/new/bbva-open4u-statup.jpg?itok=zU6yPVi2" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card card-image" style="background-image: url(https://desarrollo.programacionymas.com/images/background_image/main.jpg);background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div class="container">
                <h2 class="my-5 h2 col-sm-12 text-center wow fadeInDown">En TIIA, los valores que nos identifican y guían son:</h2>
                <div class="row features-small mb-5 mt-3">
                    <div class="col-md-4  col-sm-12 mt-2 wow bounceIn">
                        <div class="border border-white rounded-circle text-center py-5">
                            <i class="fa fa-check-circle fa-2x py-3"></i>
                            <p class="h5">Fiabilidad</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 wow bounceIn" data-wow-delay="0.2s">
                        <div class="border  border-white rounded-circle text-center py-5">
                            <i class="fa fa-check-circle fa-2x py-3"></i>
                            <p class="h5">Trabajo en Equipo</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 wow bounceIn" data-wow-delay="0.3s">
                        <div class="border  border-white rounded-circle text-center py-5">
                            <i class="fa fa-check-circle fa-2x py-3"></i>
                            <p class="h5">Responsabilidad</p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-2 col-sm-12 mt-2 wow bounceIn" data-wow-delay="0.4s">
                        <div class="border border-white rounded-circle text-center py-5">
                            <i class="fa fa-check-circle fa-2x py-3"></i>
                            <p class="h5">Comunicacion</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 wow bounceIn" data-wow-delay="0.5s">
                        <div class="border  border-white rounded-circle text-center py-5">
                            <i class="fa fa-check-circle fa-2x py-3"></i>
                            <p class="h5">Liderazgo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection