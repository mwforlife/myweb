<?php
include 'PHPMailer/PHPMailerAutoload.php';

//Get Atributes from the form
$name = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$message = $_POST['mensaje'];

define ("DEMO", false);

//Get Templates Content
$templates_file = file_get_contents('templates/contact.php');

//Set the Email From
$email_from = "WILKENS TECH - NoReply <noreply@wilkenstech.com";

//Replace Object with the values from the form
$swap_var = array(
    "{SITE_ADDR}" => "http://wilkenstech.com",
    "{EMAIL_FROM}" => $email,
    "{FROM_NAME}" => $name,
    "{MESSAGE}" => $message,
    "{ASUNTO}" => $asunto
);

// create the email headers to being the email
$email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
$email_headers .= "MIME-Version: 1.0\r\n";
$email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$email_message = $templates_file;

// search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
foreach (array_keys($swap_var) as $key){
    if (strlen($key) > 2 && trim($swap_var[$key]) != '')
        $email_message = str_replace($key, $swap_var[$key], $email_message);
}

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.hostinger.com";
$mail->Port = 465;
$mail->Username = "noreply@wilkenstech.com";
$mail->Password = "21Chichi$";
$mail->From = "noreply@wilkenstech.com";
$mail->FromName = "Wilkens Tech - Noreply";
$mail->Subject = "Contacto Desde la Web";
$mail->Body = $email_message;
$mail->AddAddress("contacto@wilkenstech.com", "Contacto - Wilkens Tech");
$mail->IsHTML(true);
$mail->AltBody = "Error: Hubo un intento de envio de un mensaje, pero no tuvo exito. Revisé el formulario para comprobar errores.";


// check if the email script is in demo mode, if it is then dont actually send an email
if (DEMO){
    die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");
}

if ($mail->send()) {
    echo "OK";
}else{
    echo "Error al enviar el mensaje: " . $mail->ErrorInfo;
}