<?php
$ad="Selma";
$mail="selma.akpinar@sakarya.edu.tr";
$pass="123456";

if(isset($_POST['name']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
}
 if($name==$ad && $password==$pass && $email==$mail)
 {
echo"Giriş Yapıldı";
 }
 else {
  echo"Hata,kullanıcı adı,şifre veya email değerleri yanlış girildi!";
  }
?>
