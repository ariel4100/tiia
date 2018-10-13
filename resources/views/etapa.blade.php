@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://desarrollo.programacionymas.com/images/background_image/work.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="mask  rgba-yellow-light" style="background-color: rgba(60,40,0,0.8)">
            <div class="container inde">
                <div class="row py-5">
                    <div class="col-md-6 text-white text-center text-md-left my-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold mt-sm-5">Etapas del Desarrollo de Software</h1>
                        <hr class="hr-light">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog section section-invert py-4">
        <h2 class="section-title text-center m-5">Etapas del desarrollo de software</h2>
        <p class="lead text-center">Pasos a seguir hasta la implementación final.<br>
            ¿En qué etapa te encuentras?
            Lee la descripción de cada etapa y selecciona aquella en la que estás.</p>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://desarrollo.programacionymas.com/images/etapas/1.svg" alt="Etapa 1: Idea">
                        <div class="card-body">
                            <h4 class="card-title text-center">1. Idea</h4>
                            <p class="text-justify">¿Tienes un proyecto en mente? Es momento de aterrizar tu idea en un documento tangible
                                y estimar los recursos necesarios para su desarrollo de principio a fin.</p>
                            <div align="center">
                                <a href="https://desarrollo.programacionymas.com/etapas/idea" class="btn btn-outline-success">Estoy aquí</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://desarrollo.programacionymas.com/images/etapas/2.svg" alt="Etapa 2: Especificación">
                        <div class="card-body">
                            <h4 class="card-title text-center">2. Especificación</h4>
                            <p class="text-justify">
                                ¿Ya tienes un documento con los requerimientos funcionales y no funcionales de tu
                                aplicación? Lo siguiente es diseñar el esquema que tendrá la aplicación, y
                                cómo será la navegación para los usuarios.
                            </p>
                            <div align="center">
                                <a href="https://desarrollo.programacionymas.com/etapas/especificacion" class="btn btn-outline-success">Estoy aquí</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://desarrollo.programacionymas.com/images/etapas/3.svg" alt="Etapa 3: Wireframe">
                        <div class="card-body">
                            <h4 class="card-title text-center">3. Wireframe</h4>
                            <p class="text-justify">
                                ¿Ya cuentas con un prototipo de la estructura de tu aplicación?
                                El paso siguiente es diseñar la interfaz de tu aplicación, tal como
                                será usada por los usuarios, aunque inicialmente sin funcionalidad.
                            </p>
                            <div align="center">
                                <a href="https://desarrollo.programacionymas.com/etapas/wireframe" class="btn btn-outline-success">Estoy aquí</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://desarrollo.programacionymas.com/images/etapas/4.svg" alt="Etapa 4: Aplicación diseñada">
                        <div class="card-body">
                            <h4 class="card-title text-center">4. Aplicación diseñada</h4>
                            <p class="text-justify">
                                ¿Tu aplicación ya se encuentra diseñada pero aún no funciona?
                                Es momento de iniciar el desarrollo.
                            </p>
                            <div align="center">
                                <a href="https://desarrollo.programacionymas.com/etapas/diseño" class="btn btn-outline-success">Estoy aquí</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://desarrollo.programacionymas.com/images/etapas/5.svg" alt="Etapa 5: Aplicación desarrollada pero incompleta">
                        <div class="card-body">
                            <h4 class="card-title text-center">5. Aplicación desarrollada pero incompleta</h4>
                            <p class="text-justify">
                                ¿Ya se ha implementado parte del funcionamiento de la aplicación pero le hacen falta
                                muchos detalles? Probablemente sea necesario volver a organizar los elementos
                                existentes, o implementar una nueva versión desde cero.
                            </p>
                            <div align="center">
                                <a href="https://desarrollo.programacionymas.com/etapas/desarrollo" class="btn btn-outline-success">Estoy aquí</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://desarrollo.programacionymas.com/images/etapas/6.svg" alt="Etapa 6: Aplicación pendiente por publicar">
                        <div class="card-body">
                            <h4 class="card-title text-center">6. Aplicación pendiente por publicar</h4>
                            <p class="text-justify">
                                ¿Tu aplicación está lista pero aún no está disponible para todo el mundo en
                                todo momento? ¡Cómo es eso posible!
                            </p>
                            <div align="center">
                                <a href="https://desarrollo.programacionymas.com/etapas/despliegue" class="btn btn-outline-success">Estoy aquí</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection