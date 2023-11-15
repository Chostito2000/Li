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
							<label for="nombre" class="form-label">Nombre del Producto</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Producto" required>
						</div>
						<div class="mb-3">
							<label for="descripcion" class="form-label">Descripción</label>
							<textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
						</div>
						<div class="mb-3">
							<label for="precio" class="form-label">Precio</label>
							<input type="number" class="form-control" name="precio" id="precio" placeholder="Precio" required>
						</div>
						<div class="mb-3">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleFormControlInput1" class="form-label">Foto</label>
									<input type="file" class="form-control" name="foto" id="input" placeholder="Foto">
									
								</div>
								<div class="col-md-4">
									<img src="" alt="" id="img" height="100">
								</div>
							</div>
							
						  </div>
						<button type="submit" class="btn btn-primary">Guardar Producto</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script>
		let img = document.getElementById('img');
		let input = document.getElementById('input');
		input.onchange = (e) => {
  			if (input.files[0]) {
    			img.src = URL.createObjectURL(input.files[0]);
  			}
		}
	</script>
@endsection
