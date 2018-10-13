@extends('layouts.app')
@section('content')
    <div style="background-image: url('https://eventoslecaros.cl/wp-content/uploads/2015/12/contactarkj.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed;">
        <div class="mask" style="background-color: rgba(0,0,0,0.7)">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 text-white my-5 wow fadeInDown">
                        <h1 class="h1-responsive font-weight-bold my-2">Contactenos</h1>
                        <p class="my-3 font-weight-bold">Podés contactarte con nosotros por teléfono o email, estaremos a disposición para brindarte nuestra experiencia en tecnología.</p>
                        <a href=" https://wa.me/541159350431" target="_blank" class="btn btn-outline-success"><i class="fab fa-whatsapp fa-2x  pr-2"></i><span class="h4">Whatsapp: 1159350431</span></a>
                        <a href="mailto:info@tiiaempresa.com" class="btn btn-outline-white"><i class="fas fa-envelope fa-2x  pr-2"></i><span class="lead text-lowercase">info@tiiaempresa.com</span></a>
                        <p class="h4 my-4">Ubicacion:</p>
                        <p class="lead"><i class="fas fa-map-marker-alt fa-2x  pr-2"></i>Lomas de Zamora, Buenos Aires.</p>
                    </div>
                    <div class="col-md-6 my-5  wow zoomIn">
                        <form action="" class="form-row z-depth-2 rounded p-4 text-white">
                            <div class="form-group col-md-6">
                                <label>Nombre y Apellido:</label>
                                <input type="text" class="form-control" name="fullname" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefono/Cel:</label>
                                <input type="text" class="form-control" name="phone"  >
                            </div>
                            <div class="form-group col-md-12">
                                <label>Correo:</label>
                                <input type="email" class="form-control" name="email"  >
                            </div>
                            <div class="form-group col-md-12">
                                <label>Mensaje:</label>
                                <textarea name="message" id="" class="form-control" cols="30" rows="3"></textarea>
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