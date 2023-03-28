<?php
//Подключение шапки
require_once("header.php");
require_once("login_checkout.php");
?>

<br><br><br><br><br><br><br>
<?php //echo "<script>alert(\"Your Email has been send successfully \")</script>";?>


<?php
$to  = "<mishawerter@gmail.com, ";
$to .= "<mich.drew.ide@gmail.com> ";

$subject = "Test From Sender App";

$message = "<html>
<head>
<meta charset=\"utf-8\">
</head>
<body style=\"background-color: #000000; margin: 0;padding: 0; font-family: arial, sans-serif;\">
Hi I'm emploter from  Ukraine and I want To present you my canditature as Captain with expirience over 5 yers!
</body>
</html>";

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: From <sender_app@example.com>\r\n";
$headers .= "Reply-To: do_not_reply-to@example.com\r\n";

mail($to, $subject, $message, $headers);
sleep(3);
echo "DONE \n<br><br><br>";
echo "$message <br><br><br>";
echo "$name";
?>

<?php
//Подключение подвала
require_once("footer.php");
?>