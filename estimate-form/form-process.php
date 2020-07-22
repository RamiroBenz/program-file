<?php
	if (isset($_POST['fname7'])){
		$nombres=htmlentities($_POST['fname7']);
		$email_cliente=htmlentities($_POST['email7']);
		$telefono=htmlentities($_POST['phone7']);
		$sercicio=htmlentities($_POST['service']);
		$presupuesto=htmlentities($_POST['probudget']);
		$prioridad=htmlentities($_POST['priority']);
		$mensaje=htmlentities($_POST['message7']);
		
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<p>Hola, ha sido registrada una nueva solicitud de cotización, según el detalle siguiente:</p> ';
	$message .= '<p>Cliente: '.$nombres.'</p> ';
	$message .= '<p>Email: '.$email_cliente.'</p> ';
	$message .= '<p>Teléfono: '.$telefono.'</p> ';
	$message .= '<p>Servicio: '.$sercicio.'</p> ';
	$message .= '<p>Presuesto: '.$presupuesto.'</p> ';
	$message .= '<p>Prioridad: '.$prioridad.'</p> ';
	$message .= '<p>Mensaje: '.$mensaje.'</p> ';
	
	

	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
	$email='info@obedalvarado.pw';//Ingresa tu dirección de correo
	
	$subject.="NUEVA SOLICITUD DE COTIZACION DE ".$nombres;			
	if (mail($email,$subject,$message,$header)){
		echo 'success';
	}	 else {
		echo 'No se pudo enviar la solicitud de cotización.';
	}
	/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
	
	
	}
?>