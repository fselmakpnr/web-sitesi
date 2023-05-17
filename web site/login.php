<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $validUsername = "b221210087@sakarya.edu.tr";
  $validPassword = "b221210087";

  if ($username == $validUsername && $password == $validPassword) {
    
    echo "Hoşgeldiniz \"" . $validPassword . "\"";
  } else {
    
    header("Location: login.html");
    exit;
  }
}
?>
