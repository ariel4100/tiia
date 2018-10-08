@extends('layouts.app')
@section('content')
    <!-- Section: Contact v.1 -->
    <section class="">
        <div class="blue lighten-2 text-white py-5">
            <h2 class="display-1 font-weight-bold text-center pt-5 wow zoomIn">Contactanos</h2>
        </div>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-5  mb-4">
                    <p class=" wow slideInUp my-3 font-weight-bold">Podés contactarte con nosotros por teléfono o email, estaremos a disposición para brindarte nuestra experiencia en tecnología.</p>
                    <div class="card">
                        <div class="card-body">
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form-name" class="form-control">
                                <label for="form-name">Nombre y Apellido</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="form-email" class="form-control">
                                <label for="form-email">Email</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="form-Subject" class="form-control">
                                <label for="form-Subject">Telefono/Cel</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <textarea type="text" id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                <label for="form-text">Mensaje</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-light-blue">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52461.073166476206!2d-58.50074460883408!3d-34.73500505219161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcce76604543e7%3A0x6d080d87c13cc6eb!2sIngeniero+Budge%2C+Pcia+de+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1539022755997" width="650" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Contact v.1 -->
@endsection