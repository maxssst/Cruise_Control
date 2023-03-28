<?php
//Подключение шапки
require_once("header.php");
require_once("login_checkout.php");
?>

<br><br><br><br><br><br><br>
<?php echo "<script>alert(\"Your Email has been send successfully \")</script>";?>


<?php
$to  = "<mishawerter@gmail.com, ";
$to .= "<mich.drew.ide@gmail.com> ";

$subject = "Test From Sender App";

$message = ' <p>CV Sender APP</p> </br> <b>Good Day </b> </br><i>My Application will be attached soon as posible! </i> </br>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: From <sender_app@example.com>\r\n";
$headers .= "Reply-To: do_not_reply-to@example.com\r\n";

mail($to, $subject, $message, $headers);
sleep(3);
echo "DONE \n";
echo "$message ";
echo "$name";
?>

<?php
//Подключение подвала
require_once("footer.php");
?>