<?php


//vars
$subject = "Consulta desde la web";
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "Empresa: "  .$_POST['empresa']    ."<br>\n";
$msg .= "Nombre: "  .$_POST['name']    ."<br>\n";
$msg .= "Apellido: "  .$_POST['apellido']    ."<br>\n";
$msg .= "Email: "  .$_POST['email']    ."<br>\n";
$msg .= "Tel.: "  .$_POST['telefono']    ."<br>\n";
$msg .= "Comentario: "  .$_POST['pedido']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail("kirkokat@gmail.com", $subject, $msg, $headers);
   mail("info@parrillaskirko.com.ar", $subject, $msg, $headers);
   header ("Location: http://www.parrillaskirko.com.ar");
   echo "Mail enviado";
}

?>
