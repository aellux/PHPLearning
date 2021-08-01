<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flaming Calculator</title>
</head>
<body>
    <form action = "flamecalc.php" method = "post">
       Thief: <input type="checkbox" name = "expClass[]" value="thief"><br>
       Mage: <input type="checkbox" name = "expClass[]" value="mage"><br>
       Pirate: <input type="checkbox" name = "expClass[]" value="pirate"><br>
       Warrior: <input type="checkbox" name = "expClass[]" value="warrior"><br>
       Archer: <input type="checkbox" name = "expClass[]" value="archer"><br>
        <input type = "submit">
</form>
    <?php
    $expClass = $_POST["expClass"];
    echo $expClass[0];
    $allStat = 8;
    $baseStat;
    ?>
</body>
</html>