@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://zedplan.com/assets/images/uploads/pcintro2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="mask rgba-gradient">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 text-white text-center text-md-left my-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold mt-5">TIIA</h1>
                        <hr class="hr-light">
                        <p class="lead">Desarrollo de Aplicaciones Web.</p>
                        <a href=" https://wa.me/541123881743" target="_blank" class="btn btn-outline-success">Contactame <i class="fab fa-whatsapp fa-6x pr-2"></i><p class="h2">Whatsapp: 1123881743</p></a>
                    </div>
                    <div class="col-md-6 text-white text-center my-5">
                        <!-- Mask & flexbox options-->
                        <div class="mask border border-white wow pulse infinite rgba-black-light p-5 d-flex justify-content-center align-items-center mt-5">
                            <!-- Content -->
                            <div class="text-center white-text wow fadeIn">
                                <h2 class="h1 mb-4 wow pulse infinite">
                                    <strong>¡50% dto. x este año aprovecha ya!!!</strong>
                                </h2>
                                <a href="{{ route('paginas') }}" class="btn btn-danger  wow pulse infinite">Paginas Web</a>
                            </div>
                            <!-- Content -->

                        </div>
                        <!-- Mask & flexbox options-->
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

    <section class="container pt-5 wow fadeIn">
            <div class="row">
                <div class="col-md-7 my-5">
                    <h2 class="">En <strong>TIIA</strong> pensamos, diseñamos y hacemos sitios web y aplicaciones usables, entendibles y fáciles de administrar.</h2>
                    <hr class="bg-dark my-5">
                    <p><b class="h4">La combinación perfecta entre Diseño y Programación.</b></p>
                </div>
                <div class="col-md-5">

                    <img class="img-fluid"  src="{{ asset('img/mobile.jpg') }}">

                </div>
            </div>

        </section>

    <div class="card card-image" style="background-image: url(http://res.cloudinary.com/pym/image/upload/f_auto,q_auto/v1510015008/full_work.jpg);background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div class="container">
                <section class="my-5">
                    <h2 class="h1-responsive font-weight-bold wow fadeInUp">Por que TIIA?</h2>
                    <div class="row">
                        <div class="col-md-4  mb-5 wow fadeInLeft">
                                    <i class="far fa-edit blue-text fa-3x my-5"></i>
                                    <h4 class="font-weight-bold">Contamos con Interfaces mejor Diseñadas. <br>Manejo Simple, Rapido y Facil de administrar.</h4>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-5 wow fadeInUp">
                          
                                    <i class="fas fa-chart-line blue-text fa-3x my-5"></i>
                                    <h4 class="font-weight-bold">Ofrece Seguridad de Autenticación de diferentes tipos de perfiles.</h4>
                            
                        </div>
                        <div class="col-md-4 mb-md-0 mb-5 wow fadeInRight">
                          
                                    <i class="fas fa-coffee blue-text fa-3x my-5"></i>
                                    <h4 class="font-weight-bold">Es Confiable, Seguro, y sobre todo el costo del mantenimiento economico.</h4>
                          
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <hr class="mb-5">

    <div class="container">
        <div class="py-4">
            <div class="row">
                <div class="card-deck wow fadeInLeft">
                    <div class="col-md-12 col-lg-3 my-3">
                        <img class="card-img-top py-3" src="https://desarrollo.programacionymas.com/images/inicio/web_icon.svg" alt="Portafolio">
                    </div>
                    <div class="col-md-12 col-lg-8 text-right">
                        <h2 class="h2 my-5">Paginas Web</h2>
                        <p class="lead">En esta seccion encontraras todos nuestros beneficios.<br>
                            Puedes acceder y ver algunos ejemplos de nuestras paginas mas solicitas que hemos realizado en este ultimo año.</p>
                        <span class="border border-danger p-2 h3">Descuento!! 50%</span>
                        <a href="{{ route('paginas') }}" class="btn btn-outline-primary">Planes de Paginas Webs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="py-4">
            <div class="row">
                <div class="card-deck wow fadeInRight">
                    <div class="col-md-12 col-lg-8">
                        <h2 class="h2 my-5">Nuestro Portafolio</h2>
                        <p class="lead">Diseñamos y desarrollamos aplicaciones web.<br>
                            Puedes acceder a nuestro portafolio para ver más información sobre las últimas aplicaciones que hemos realizado.</p>
                        <button type="button" class="btn btn-outline-success" data-toggle="popover" data-placement="right" title="Portafolios"
                                data-content="Esta seccion se esta Actualizando, pronto estara habilitada.">Revisa nuestras aplicaciones</button>
                    </div>
                    <div class="col-md-12 col-lg-3 my-3">
                        <img class="card-img-top py-3" src="https://desarrollo.programacionymas.com/images/inicio/portfolio.svg" alt="Portafolio">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection