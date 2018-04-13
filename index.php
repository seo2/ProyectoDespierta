<?php include('header.php'); ?>
<?php include('nav.php'); ?>

	<section id="barra">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="assets/img/logo-seguros.png" id="logo-seguros">
				</div>
				<div class="col-sm-6 text-right">
					<img src="assets/img/logo-sura.png" id="logo-sura">
				</div>
			</div>
		</div>
	</section>

<?php include('slider-top.php'); ?>


	<section id="historias">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<img src="assets/img/tit-conoce.png" class="img-responsive section-title">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
						<?php include('slider-historias.php'); ?>
				</div>
			</div>
		</div>
	</section>


	<section id="eventos">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<img src="assets/img/tit-eventos.png" class="img-responsive section-title">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>Conoce la cartelera completa ingresando aquí</p>
					<a href="javascript:void(0);" class="btn btn-primary">Cartelera eventos</a>
				</div>
			</div>
		</div>
	</section>


	<section id="participa">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<img src="assets/img/tit-participa.png" class="img-responsive section-title">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<form id="formParticipa">
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" placeholder="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" class="form-control" id="apellido" placeholder="">
							</div>

						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="rut">RUT</label>
								<input type="text" class="form-control" id="rut" placeholder="">
							</div>

						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="telefono">Teléfono</label>
								<input type="text" class="form-control" id="telefono" placeholder="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" placeholder="">
							</div>

						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="artista">Tu Artista</label>
								<input type="text" class="form-control" id="artista" placeholder="">
							</div>

						</div>
						<div class="col-sm-12">
							<div class="form-group comment">
								<label for="comment">Cuéntanos tu historia en solo 500 caracteres porque deberías ganar entradas para una experiencia Despierta.</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-default btn-enviar">ENVIAR</button>
					</form> <!-- form participa -->
				</div>
			</div>
		</div>
	</section>


	<section id="galeria">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</section>
<?php include('footer.php'); ?>
