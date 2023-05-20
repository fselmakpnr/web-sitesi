<?php

$email = $_POST['email'];
$password = $_POST['password'];


if ($email === 'B221210087@sakarya.edu.tr' && $password === 'B221210087') 
{
  echo'Giriş Başarılı.Ana Sayfaya Yönlendiriliyorsunuz';
    header('Location:index.html');
    exit();
} else {
    
    echo 'Hatalı e-posta veya şifre. Lütfen tekrar deneyin.';
    header('Location: login.php');
    exit();
}
?>

