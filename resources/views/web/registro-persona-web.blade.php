@extends('web.pagina-web-plantilla')
@section('contenido')
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
					<form action="{{ route('guardar.persona') }}" method="POST" enctype="multipart/form-data">
						 @csrf
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nombres</label>
							<input type="text" class="form-control" name ="nombres" id="exampleFormControlInput1" placeholder="Nombres">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Apelldio Paterno</label>
							<input type="text" class="form-control" name="paterno" id="exampleFormControlInput1" placeholder="Apelldio Paterno">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
							<input type="text" class="form-control" name="materno" id="exampleFormControlInput1" placeholder="Apellido Materno">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Bibliografia</label>
							<textarea class="form-control" name="bibliografia" id="exampleFormControlTextarea1" rows="3"></textarea>
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
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Numero Documento</label>
							<input type="number" class="form-control" name="documento" id="exampleFormControlInput1" placeholder="Numero Documento">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Numero Celular</label>
							<input type="text" class="form-control" name="celular" id="exampleFormControlInput1" placeholder="Numero Celular">
						  </div>
						<button type="submit" class="btn btn-primary">Guardar Datos</button>
					  </form>
				</div>

						</div>
					</div>
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