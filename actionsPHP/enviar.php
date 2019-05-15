<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




$mail = new PHPMailer();

$nomb = $_POST['nombre'];
$corr =  $_POST['correo'];
$tel = $_POST['telefono'];
$mens =  $_POST['mensaje'];

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure= 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->Username = 'najim.premium@gmail.com';
$mail->Password = 'najim12345';

$mail->setFrom('najim.premium@gmail.com',$nomb. '-' .'Contacto NAJIM');
$mail->addAddress('officecleaning.enava@gmail.com', 'Contacto NAJIM');
$mail->Subject = 'Contacto NAJIM';


$mail->Body = 'Nombre: '.$nomb."\n". 'Correo: '.$corr."\n".'Telefono: '.$tel."\n". 'Mensaje: '.$mens;
$mail->SMTPOptions = array(
 'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
 ));


if($mail->send()){
echo "<script>
var reply=confirm('Mensaje enviado correctamente, nos pondremos en contacto contigo');
if (reply==true) 
{
document.location= '../Contacto.html';
}
else 
{

}
</script>";
}else{
echo "Error";
}



/*
//$from = "munginait3000@gmail.com";
//$headers = "From:" .$from;
$destino = "marvinjiga@gmail.com";
$nombre = "Marvin";
$mensaje ="Exitoooooo";

$contenido = "Nombre: ". $nombre . "Mensaje: " . $mensaje;

mail($destino, "Contacto NAJIMPRUEBA", $contenido);

*/



 ?>