<?php
date_default_timezone_set('America/Santiago');
require_once ('MysqliDb.php');

//$db = new MysqliDb ('localhost', 'root', '', 'db219687_proyectodespierta');
$db = new MysqliDb ('internal-db.s219687.gridserver.com', 'db219687', '4#LyMm}-3tm', 'db219687_sura');



 

// Check for empty fields
if(empty($_POST['nombre'])      ||
   empty($_POST['apellido'])     ||
   empty($_POST['rut'])     ||
   empty($_POST['telefono'])     ||
   empty($_POST['artista'])     ||
   empty($_POST['comment'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "error";
   return false;
   }
   
$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$apellido = strip_tags(htmlspecialchars($_POST['apellido']));
$rut = strip_tags(htmlspecialchars($_POST['rut']));
$fono = strip_tags(htmlspecialchars($_POST['telefono']));
$mail = strip_tags(htmlspecialchars($_POST['email']));

$artista = strip_tags(htmlspecialchars($_POST['artista']));
$comment = strip_tags(htmlspecialchars($_POST['comment']));


//buscar si ya existe
$db->rawQuery('SELECT * from registros where rut = ?', Array ($rut));

if($db->count == 0){
//`id`, `nombre`, `apellido`, `rut`, `telefono`, `email`, `artista`, `mensaje`, `fecha`SELECT * FROM `registros` WHERE 1
	$data = Array (
			'nombre' => $nombre, 
			'apellido' => $apellido, 
			'rut' => $rut, 
			'telefono' => $fono, 
			'email' => $mail, 
			'artista' => $artista, 
			'mensaje' => $comment, 
			'fecha' => date('Y-m-d H:i:s')
			);
	$id = $db->insert ('registros', $data);
	if($id){
		echo "ok";
	}else{
		echo "error";
	}

}else{
	echo "existe";
}

?>