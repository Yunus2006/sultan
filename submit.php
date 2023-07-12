<?php
phpinfo();
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div>
    <h2>Thank you for your submission!</h2>
    <p>Your form data:</p>
    <ul>
      <li><strong>Name:</strong> <?php echo $_POST['name']; ?></li>
      <li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
      <li><strong>Tel. Nummer:</strong> <?php echo $_POST['telephone']; ?></li>
      <li><strong>Feedback:</strong> <?php echo $_POST['feedback']; ?></li>
    </ul>
  </div>
</body>
</html>
