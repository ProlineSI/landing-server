<?php

    $to = "info@accessgo.com.ar";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: ".$from;
    $subject = "Mail del formulario de la web";

    $fields = array();
    $fields{"email"}    = "email";
    $fields{"sub"}    = "telefono";
    $fields{"message"}   = "consulta";
    

    $body = "Here is the message you got:\n\n"; 
    foreach($fields as $a => $b){   
        $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); 
    }

    $send = mail($to, $subject, $body, $headers);

?>