@extends('web.pagina-web-plantilla')

@section('contenido')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{ asset('web/images/bg-01.jpg')}});">
    <h2 class="ltext-105 cl0 txt-center">
        Registro Persona
    </h2>
</section>

<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form action="{{ route('guardar.persona') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        REGISTRO
                    </h4>

                    <div class="form-group">
                        <label for="nombres">Nombre:</label>
                        <input type="text" id="nombres" name="nombres" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="paterno">Apellido Paterno:</label>
                        <input type="text" id="paterno" name="paterno" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="materno">Apellido Materno:</label>
                        <input type="text" id="materno" name="materno" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="documento">Documento:</label>
                        <input type="text" id="documento" name="documento" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="celular">Número de Teléfono:</label>
                        <input type="text" id="celular" name="celular" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Tu dirección de correo electrónico" required>
                    </div>

                    <div class="form-group">
                        <label for="msg">Mensaje:</label>
                        <textarea id="msg" name="msg" class="form-control" placeholder="¿En qué podemos ayudarte?"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">
                            Registrar
                        </button>
                    </div>
                </form>
            </div>

            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
            </div>
        </div>
    </div>
</section>
@endsection
