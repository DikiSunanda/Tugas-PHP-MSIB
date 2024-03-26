<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Layout with Frameset</title>
</head>
<frameset rows="13%, *, 6%" frameborder="no" noresize="yes">
  <frame src="header.php">
  <frameset cols="*">
    <frame src="main.php" name="main" noresize="yes">
  </frameset>
  <frame src="footer.php" noresize="yes" scrolling="no">
</frameset>
</html>
