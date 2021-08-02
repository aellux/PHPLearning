<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flaming Calculator</title>
</head>
Flaming Calculator
<body>
    <form action = "flamecalc.php" method = "POST">
       Thief: <input type="checkbox" name = "expClass[]" value="Thief"><br>
       Mage: <input type="checkbox" name = "expClass[]" value="Mage"><br>
       Pirate: <input type="checkbox" name = "expClass[]" value="Pirate"><br>
       Warrior: <input type="checkbox" name = "expClass[]" value="Warrior"><br>
       Archer: <input type="checkbox" name = "expClass[]" value="Archer"><br>
        
Input the flame score <br>
STR: <input type="number" name = "baseStr" value = "0"><br>
DEX: <input type="number" name = "baseDex" value = "0"><br>
INT: <input type="number" name = "baseInt" value = "0"><br>
LUK: <input type="number" name = "baseLuk" value = "0"><br>
ATK: <input type="number" name = "baseAtk" value = "0"><br>
MATT: <input type="number" name = "baseMatk" value = "0"><br>
ALL %: <input type="number" name = "allStat" value = "0"><br>
<input type = "submit"><br>
Flame Score:
</form>
    <?php
    $expClass = $_POST["expClass"];
    echo $expClass[0];
    function calcFlame()
    {
    if (isset($_POST['Thief']))
        {
        echo $_POST['baseStr'] + ($_POST['allStat'] * 8);
        }
    }

    ?>
</body>
</html>