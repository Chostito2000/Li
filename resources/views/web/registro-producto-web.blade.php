@extends('web.pagina-web-plantilla')

@section('contenido')
    <h1>Registro producto</h1>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{ asset('web/images/bg-01.jpg')}});">
        <h2 class="ltext-105 cl0 txt-center">
            Registro Persona
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="{{ route('guardar.producto') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            REGISTRO
                        </h4>

                        <div class="label-input-group">
                            <label for="nombre_producto">Nombre del producto:</label>
                            <input type="text" id="nombre_producto" name="nombre_producto" required>
                        </div>

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg"
                                placeholder="Descripcion"></textarea>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            registrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
