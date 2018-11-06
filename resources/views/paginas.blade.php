@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://1.bp.blogspot.com/-UyHW092rXrI/WNBOA_8Yu2I/AAAAAAAAAj4/E0U7YrvJRRQIBC2ICqlFgDbRCZeuFdkcwCEw/s1600/WHAT-IS-ECOMMERCE-WEB-DEVELOPMENT.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="mask" style="background-color: rgba(0,0,0,0.7)">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 text-white text-center my-5 wow zoomIn">
                        <h1 class="h1-responsive font-weight-bold my-5">Diseño de Paginas Webs Profesionales</h1>
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
    <section class="container my-5">
        <p class="h4 my-4">Estos son algunos ejemplos de imagenes de los sitios que desarrollamos.</p>
        <div class="row">
            <div class="col-md-4">
                <a href="https://d85wutc1n854v.cloudfront.net/live/products/600x375/WB0R2CN86.png?v=1.3.0">
                    <img src="https://d85wutc1n854v.cloudfront.net/live/products/600x375/WB0R2CN86.png?v=1.3.0" alt="" class="img-fluid">
                </a>
                <p class="text-center h6 my-2">Sistemas de Ventas,</p>
            </div>
            <div class="col-md-4">
                <a href="https://i.ytimg.com/vi/w52AzBCnJEI/hqdefault.jpg">
                    <img src="https://i.ytimg.com/vi/w52AzBCnJEI/hqdefault.jpg" alt="" class="img-fluid">
                </a>
                <p class="text-center h6 my-2">Sistemas Academicos</p>
            </div>
            <div class="col-md-4">
                <a href="https://w3layouts.com/wp-content/uploads/2015/12/food_template-future.jpg">
                    <img src="https://w3layouts.com/wp-content/uploads/2015/12/food_template-future.jpg" alt="" class="img-fluid">
                </a>
                <p class="text-center h6 my-2">Y todo lo que usted desea.</p>
            </div>
        </div>
    </section>
    <!---PLANES----->
    <section class="container text-center my-5">
        <h2 class="h1-responsive font-weight-bold text-center my-4 wow bounceIn">Nuestros Planes</h2>
        <p class="text-center lead wow bounceIn">Para solicitar información sobre el Desarrollo de la Aplicacion Web, por favor complete el siguiente formulario en <a href="{{ route('contact') }}">Contactos</a>, contactanos por Whatsapp o enviando un correo a
            <a href="mailto:info@tiiaempresa.com">info@tiiaempresa.com</a>.
            <br>El presupuesto básico de la página inicia de los 3000$ ARS.</p>
        <div class="row my-5">
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 wow fadeInUp">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="my-2 text-white">Plan Basico</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <ul>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Autenticacion Usuario, Admin</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Listar, Agregar, Modificar,Eliminar</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Redes Sociales</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Mantenimiento $600/x mes</p>
                                </li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 wow fadeInUp">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="my-2 text-white">Plan Pyme</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <ul>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Autenticacion Usuario, Admin</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Listar, Agregar, Modificar,Eliminar</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Redes Sociales</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Chat con los Clientes</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Resposive (Adaptable para Celulares)</p>
                                </li>
                                <li class="d-block">
                                    <p><i class="fa fa-check green-text pr-2"></i>Mantenimiento $800/x mes</p>
                                </li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---servicios----->
    <div class="section py-4 wow fadeInUp">
        <div class="container">
            <h2 class="section-title underline--left my-5">Tecnologías usadas en el desarrollo</h2>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="underline--left m-4">Backend</h4>
                </div>
                <div class="col-md-3 text-center">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/laravel.svg" class="w-100" alt="Logo Laravel"/>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/firebase.svg" class="w-100" alt="Logo Firebase"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-invert py-4 wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="underline--left m-4">Gestor de bases de datos</h4>
                </div>
                <div class="col-md-3 text-center">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/mySQL.svg" class="w-100" alt="Logo MySQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/postgreSQL.svg" class="w-100" alt="Logo postgreSQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/mongo_db.svg" class="w-100" alt="Logo mongoDB"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-5">
    <!-- / Testimonials Section
    <div class="footer-cta bg-dark  wow fadeInUp">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="text-white">¿Necesitas un desarrollo a medida?</h2>
                <p class="lead text-muted col-lg-8 col-md-10 ml-auto mr-auto">
                    Las aplicaciones mostradas en esta página son solo una pequeña muestra de los proyectos que hemos desarrollado.<br>
                    No podemos exponer información de otros sistemas por petición de los propios clientes.<br>
                    Lo que sí es seguro, es que las aplicaciones las desarrollamos desde cero, según las necesidades específicas de cada caso.
                </p>
            </div>
        </div>
    </div>
-->
@endsection