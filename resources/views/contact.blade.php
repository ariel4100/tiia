@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://eventoslecaros.cl/wp-content/uploads/2015/12/contactarkj.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="mask" style="background-color: rgba(0,0,0,0.7)">
            <div class="container">
                <div class="row py-5">
                    @if (session('contact'))
                    <div class="container mt-5">
                        <div class="alert alert-success" role="alert">
                            <strong>Notificacion: </strong><p class="lead">{{ session('contact') }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-6 text-white my-3 wow fadeInDown">
                        <h1 class="h1-responsive font-weight-bold my-2">Contactenos</h1>
                        <p class="my-3 font-weight-bold">Podés contactarte con nosotros por teléfono o email, estaremos a disposición para brindarte nuestra experiencia en tecnología.</p>
                        <a href=" https://wa.me/541123881743" target="_blank" class="btn btn-outline-success"><i class="fab fa-whatsapp fa-2x  pr-2"></i><span class="h4">Whatsapp: 1123881743</span></a>
                        <a href="mailto:info@tiiaempresa.com" class="btn btn-outline-white"><i class="fas fa-envelope fa-2x  pr-2"></i><span class="lead text-lowercase">info@tiiaempresa.com</span></a>
                        <p class="h4 my-4">Ubicacion:</p>
                        <p class="lead"><i class="fas fa-map-marker-alt fa-2x  pr-2"></i>Lomas de Zamora, Buenos Aires.</p>
                    </div>
                    <div class="col-md-6 my-5  wow zoomIn">
                        <form action="{{ route('contact-send') }}" method="POST" class="form-row z-depth-2 rounded p-4 text-white">
                            @csrf
                            <div class="form-group col-md-6">
                                <label>Nombre y Apellido:</label>
                                <input type="text" class="form-control {{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" >
                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefono/Cel:</label>
                                <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"  >
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Correo:</label>
                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  >
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Mensaje:</label>
                                <textarea name="message" id="" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" cols="30" rows="3"></textarea>
                                @if ($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section: Contact v.1 -->
@endsection