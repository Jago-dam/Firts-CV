<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Joel">
    </head>

<body>

<?php

/*Datos*/
  $nombres = $_POST['nombres'];
  $email= $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];

/*Mensajes*/

  $email_from = "55157653l@iespoblenou.org";
  $email_subject = $nombres " miró tu portafolio :)"; 
  $email_body = "Este mensaje puede ser de tu interes. \n". "$nombres esta viendo tu cv, esta es la información \n del formulario que se realizó: \n". "Nombre: $nombres \n". "Mensaje del contacto: $mensaje \n". "Telefono: $telefono \n". "Correo electronico: $email";

  $to = "55157653l@iespoblenou.org";
  $header = "From: $email \r\n";
  $header = "Reply-To: $email_from \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>

<!--  echo ("<p>Nombre: $name </p>") ; 
  echo ("<p>Visit_Mail: $visitor_email </p>") ; 
  echo ($telephone);
  echo ($_POST['Telefono']);
  echo ( $_POST['Mensaje']); -->



<h1> ¡Gracias por el mensaje! </h1> <br>

<a href="#Perfil"></a>

</body>
</html>