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
							<label for="exampleFormControlInput1" class="form-label">Foto</label>
							<input type="file" class="form-control" name="foto" id="exampleFormControlInput1" placeholder="Foto">
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
			
				

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								jr los incas 987  con av el sol
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+51 972554412
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								elvisccama18@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

	@endsection