<?php
if (empty($_POST["name"]
    || empty($_POST["email"]))
    || empty($_POST["message"])
 ) {;
    exit();
}
$headers = 'From: nikola.meandzija@dzoniweb.com' . "\r\n" .
    'Reply-To: nikola.meandzija@dzoniweb.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($_POST["email"], "Nikola Meandzija", $_POST["message"], $headers);