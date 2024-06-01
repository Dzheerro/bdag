<?php

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$messages = trim($_GET["messages"]);


$message = "\n Name: $name <br> Email: $email <br> Message: $messages \n";

mail('shop@bdagliving.com', 'New', $message);


header("Location:thankyou.php");
