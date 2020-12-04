@extends('template')
@section('titulo', 'Login')
@section('body')
<section class="fondoLogin view">
    <div class="mask rgba-stylish-light d-flex justify-content-center align-items-center">
        <div class="container col-sm-8 col-md-8 col-lg-4">
            {{-- card del formulario --}}
                <div class="container d-flex justify-content-center align-items-center logo-login">
                    <img src="https://1000marcas.net/wp-content/uploads/2019/12/Pinterest-Logo.png"  alt="Logo">
                </div>
                <div class="card text-light">
                    <div class="card-body bg-dark">
                        {{-- Formulario --}}
                        <form>
                            {{-- Texto de iniciar sesion --}}
                            <p class="h3-responsive d-flex justify-content-center">Iniciar Ses&oacute;n</p>
                            <img src="" alt="">
                            {{-- textbox y titulo del correo --}}
                            <div class="md-form">
                                <i class="fas fa-user prefix"></i>
                                <input type="email" class="form-control mt-1" id="usuarioLogin">
                                <label for="usuarioLogin">Usuario</label>
                            </div>
                            {{-- textbox y titulo del password --}}
                            <div class="md-form">
                                <i class="fas fa-key prefix"></i>
                                <input type="password" class="form-control mt-1" id="passwordLogin">
                                <label for="passwordLogin">Contraseña</label>
                            </div>
                            {{-- checkbox de mantener la sesion --}}
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Mantener la sesi&oacute;n activa</label>
                            </div>
                            {{-- boton de iniciar sesion --}}
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark">Iniciar Sesi&oacute;n</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
