<?php
if (isset($_POST['email'],$_POST['sifre'])&&($_POST['email']=='B221210087@sakarya.edu.tr')&&($_POST['sifre']=='b221210087'))
{
  echo("Hoşgeldin B22121087");
  echo"<p><a href='index.html'> &lt;Anasayfaya Geri Dönün&gt;</a></p>";

}
else 
{
 echo("Hatalı Giriş Yaptınız!!!");
 echo"<p><a href='login.html'>&lt;Login Sayfasına Geri Dönün&gt;</a></p>";

}
?>