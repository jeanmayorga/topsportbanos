<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $people = $_POST['people'];
    $nameHidden = $_POST['nameHidden'];
    $priceHidden = $_POST['priceHidden'];

    $from = "info@topsportbanos.com";
    $to = "info@topsportbanos.com";
    $subject = "Nuevo Correo: ".$nameHidden;


    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($to) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = '<p><strong>Programa:</strong> '.$nameHidden.'<p>';
    $message .= '<p><strong>Precio:</strong> '.$priceHidden.'<p>';
    $message .= '<p><strong>Nombre:</strong> '.$name.'<p>';
    $message .= '<p><strong>Email:</strong> '.$email.'<p>';
    $message .= '<p><strong>Teléfono:</strong> '.$phone.'<p>';
    $message .= '<p><strong>Fecha:</strong> '.$date.'<p>';
    $message .= '<p><strong># de Personas:</strong> '.$people.'<p>';

    if(mail($to,$subject,$message, $headers)){
        echo "ok";
    }else{
        echo "no";
    }

?>