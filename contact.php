<?php
// $to = "martinarisperiveros@gmail.com";
$to = "madelleine.mirabal.cano@gmail.com","hormi.ps@gmail.com";
$subject = "Contact from: " . $_POST["name"] . ' ' . $_POST["reason"];
$message = 'Nombre: ' . $_POST["name"] . '<br />'
        . $_POST["message"] . $_POST["message"];
$header = "Reply-To:'" . $_POST["email"] . "'";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
$retval = mail($to, $subject, $message, $header);
if ($retval == true) {
    header('Content-Type: application/json');
    echo json_encode(array('success' => TRUE));
} else {
    header('Content-Type: application/json');
    echo json_encode(array('success' => FALSE));
}
?>
