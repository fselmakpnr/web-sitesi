<!DOCTYPE html>
<html>
<head>
  <title>Gönderilen Form Bilgileri</title>
</head>
<body>
  <h2>Gönderilen Form Bilgileri</h2>

  <ul>
    <li><strong>Ad:</strong> <?php echo $_POST['name']; ?></li>
    <li><strong>E-posta:</strong> <?php echo $_POST['email']; ?></li>
    <li><strong>Mesaj:</strong> <?php echo $_POST['message']; ?></li>
  </ul>
</body>
</html>
