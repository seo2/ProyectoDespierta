<?php include('header.php'); ?>
<?php include('nav.php'); ?>

	<section id="barra">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="assets/img/logo-sura.png" id="logo-sura">
				</div>
				<div class="col-sm-6 text-right">
					<img src="assets/img/logo-seguros.png" id="logo-seguros">

				</div>
			</div>
		</div>
	</section>

<?php include('slider-top.php'); ?>


	<section id="historias">
		<div class="container">
			<div class="row">

					<!-- <img src="assets/img/tit-conoce.png" class="img-responsive section-title"> -->
						<div class="section-title">
							<p class="center-block">Cuéntanos la historia que quieres despertar
							y participa por entradas para ver a tu artista favorito.</p>
							<p class="center-block verde">¡Ellos ya lo hicieron!</p>
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
			<div class="title-wrapper">
				<img src="assets/img/tit-eventos.png" class="img-responsive center-block">
				<div class="col-sm-12 text-center conoce">
					<p>Conoce la cartelera disponible <a href="javascript:void(0);" class="btn btn-primary btn-revisa">Revisa aquí</a></p>
				</div>
			</div>
	</section>


	<section id="participa">
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-10 col-sm-offset-1">
					<img src="assets/img/tit-participa.png" class="img-responsive section-title">
				</div> -->
				<div class="section-title">
					<p class="center-block">¿Qué historia vas a despertar?</p>
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
								<label class="comment" for="comment">Cuéntanos tu historia en solo 500 caracteres porque deberías ganar entradas para una experiencia Despierta.</label>
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
		<div class="container-fluid">
			<div class="row">
				<img class="img-responsive" src="assets/img/galeria.jpg" alt="">
			</div>
		</div>
	</section>
<?php include('footer.php'); ?>
