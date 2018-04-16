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
							<div class="manifiesto-desktop visible-xs visible-sm">
									<h1 class="center-block">Bienvenidos a Despierta</h1>
									<p class="invitamos center-block">Te invitamos a participar de un proyecto que busca despertar tus emociones, ideas y
									recuerdos a través del arte, la cultura y el espectáculo.</p>
							</div>


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
					<p>Conoce la cartelera disponible <a class="btn btn-primary btn-revisa" href="http://movistararena.cl/cartelera/" target="_blank">Revisa aquí</a></p>
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
					<form id="formParticipa" method="post" action="ajax/guardar.php">
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" name="nombre" required="" title="campo requerido">
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" class="form-control" name="apellido" required="" title="campo requerido">
							</div>

						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="rut">RUT</label>
								<input type="text" class="form-control rut" id="rut" name="rut" required="" data-msg-required="campo requerido">
							</div>

						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="telefono">Teléfono</label>
								<input type="number" class="form-control" name="telefono" required="" title="campo requerido">
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" required="" data-msg-required="campo requerido" data-msg-email="Ingresa un email válido">
							</div>

						</div>
						<div class="col-sm-12 col-md-4">
							<div class="form-group">
								<label for="artista">Tu Artista</label>
								<input type="text" class="form-control" name="artista" required="" title="campo requerido">
							</div>

						</div>
						<div class="col-sm-12">
							<div class="form-group comment">
								<label class="comment" for="comment">Cuéntanos tu historia en solo 500 caracteres, explicando por qué deberías ganar entradas para una experiencia Despierta.</label>
								 <p class="text-right">Quedan <input id="contador" onblur="textCounter(this.form.recipients,this,500);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="500" name="counter"> caracteres.</p>
								<textarea onblur="textCounter(this,this.form.counter,500);" onkeyup="textCounter(this,this.form.counter,500);" class="form-control required" rows="5" name="comment"  title="campo requerido"></textarea>
							</div>
							<div id="success"></div>
						</div>
						<div class="loading"></div>

						<button type="submit" class="btn btn-default btn-enviar">ENVIAR</button>
						<div class="clear"></div>
						<div class="bases">
								<div class="checkbox">
								    <label for="agree">
								      <input type="checkbox" class="" id="agree" name="agree"  required="" title="Para poder enviar tu historia, debes aceptar los Términos y Condiciones"><a href="" target="_blank">Acepto los términos y condiciones.</a>
								    </label>
							  </div>
							  <a href="" target="_blank">Bases legales</a>
						</div>

					</form> <!-- form participa -->
				</div>
			</div>
		</div>
	</section>

	<?php include('slider-galeria.php'); ?>

<?php include('footer.php'); ?>
