<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php ?>

<form action="site.php" method="REQUEST"> 
    Name: <input type="text" name="username">
    <input type="submit">
    
</form>
<br>
<?php echo $_REQUEST["username"] ?>
</body>
</html>