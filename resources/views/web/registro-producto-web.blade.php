@extends('web.pagina-web-plantilla')
@section('contenido')
	
	<h1>Registro producto</h1>
	
	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="{{ route('guardar.producto') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nombre del Producto</label>
							<input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Nombre del Producto" required>
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
							<textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Guardar Producto</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	

	@endsection