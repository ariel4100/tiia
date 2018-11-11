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
                <p class="text-center h6 my-2">Tienda Online de Ventas,</p>
            </div>
            <div class="col-md-4">
                <a href="https://i.ytimg.com/vi/w52AzBCnJEI/hqdefault.jpg">
                    <img src="https://i.ytimg.com/vi/w52AzBCnJEI/hqdefault.jpg" alt="" class="img-fluid">
                </a>
                <p class="text-center h6 my-2">Sitios Academicos,Eventos,Blogs</p>
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
        <p class="text-center lead wow bounceIn">Para solicitar información sobre el Desarrollo de la Aplicacion Web, por favor complete el siguiente formulario en <a href="{{ route('contact') }}">Contactos</a>, ó contactanos por Whatsapp o enviando un correo a
            <a href="mailto:info@tiiaempresa.com">info@tiiaempresa.com</a>.
            <br>El presupuesto básico de la página inicia de los <del>6000$ ARS</del> <b class="bg-danger text-white p-1">3000$ ARS.</b> </p>
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
                                    <p><i class="fa fa-check green-text pr-2"></i>Mantenimiento $400/x mes</p>
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
                                    <p><i class="fa fa-check green-text pr-2"></i>Mantenimiento $700/x mes</p>
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
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/laravel.svg" class="w-100" alt="Logo Laravel"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://pp.userapi.com/c624618/v624618775/351f9/r_V679bxqXA.jpg?ava=1" class="w-100" alt="Logo Firebase"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://desarrollo.programacionymas.com/images/inicio/mySQL.svg" class="w-100" alt="Logo MySQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRowicArqZJItnadkhHEoCqecS0bXv16LRgZr0ZyOmAjpo92-K" class="w-100" alt="Logo MySQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4" >
                    <div class="mb-3 ml-5 mr-5">
                        <img src="data:image/png;base64,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" class="w-100" alt="Logo MySQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="http://sr-re.com/wp-content/uploads/2015/06/css3.png" class="w-100" alt="Logo MySQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Javascript_badge.svg/710px-Javascript_badge.svg.png" class="w-100" alt="Logo MySQL"/>
                    </div>
                </div>
                <div class="col-md-3 text-center mt-4">
                    <div class="mb-3 ml-5 mr-5">
                        <img src="http://www.stickpng.com/assets/images/58481791cef1014c0b5e4994.png" class="w-100" alt="Logo MySQL"/>
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