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
							<label for="exampleFormControlInput1" class="form-label">Categoria</label>
							<select class="form-select" name= "categoria"aria-label="Default select example">
								<option selected>Selecionar Categoria</option>
								<option value="impresoras">IMPRESORAS</option>
								<option value="tintas">TINTAS</option>
								<option value="laptops">LAPTOPS</option>
								<option value="equipo de sonido">EQUIPO DE SONIDO</option>
							  </select>
						
							</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nombre</label>
							<input type="texto" class="form-control" name="nombre"id="exampleFormControlInput1" placeholder="Nombres">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
							<textarea class="form-control"name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
						  <div class="row g-3 align-items-center">
							<div class="col-auto">
							  <label for="precio" name="precio" class="col-form-label">Precio</label>
							</div>
							<div class="col-auto">
							  <input type="texto"   class="form-control" aria-describedby="passwordHelpInline">
							</div>
							<div class="col-auto">
							  <span id="passwordHelpInline" class="form-text">
								sin igv
							  </span>
							</div>
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Stock</label>
							<input type="number" class="form-control" name="stock" id="exampleFormControlInput1" placeholder="Stock">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Foto</label>
							<input type="file" class="form-control" name="foto"id="exampleFormControlInput1" placeholder="Foto">
						  </div>
						  <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Fecha Registro</label>
							<input type="date" class="form-control" name="fechaRegistro"id="exampleFormControlInput1" placeholder="Fecha Registro">
						  </div>
						  
					      <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Marca</label>
						<select class="form-select" name="marca"aria-label="Default select example">
							<option selected>selecionar marca</option>
							<option value="hp">HP</option>
							<option value="lenovo">LENOVO</option>
							<option value="legion">LEGION</option>
						  </select>
					
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