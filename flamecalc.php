<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flaming Calculator</title>
</head>
Flaming Calculator <br>
<body>
    <form action = "flamecalc.php" method = "POST">
       Thief: <input type="checkbox" name = "expClass[]" value="Thief"><br>
       Mage: <input type="checkbox" name = "expClass[]" value="Mage"><br>
       Pirate: <input type="checkbox" name = "expClass[]" value="Pirate"><br>
       Warrior: <input type="checkbox" name = "expClass[]" value="Warrior"><br>
       Archer: <input type="checkbox" name = "expClass[]" value="Archer"><br>
        
Input the flame score <br>
STR: <input type="number" name = "num1" ><br>
DEX: <input type="number" name = "num2" ><br>
INT: <input type="number" name = "num3" ><br>
LUK: <input type="number" name = "num4" ><br>
ATK: <input type="number" name = "atkStat"><br>
MATT: <input type="number" name = "matkStat"><br>
ALL %: <input type="number" name = "allStat" ><br>
<input type = "submit"> <br>
Flame Score: 
</form>
    <?php
   if(isset($_POST['expClass'])){
    if(in_array('Thief', $_POST['expClass'])){
        echo "Thief was checked";
        echo "<br>";
        echo $_POST['num4'] + ($_POST['allStat'] * 8) + ($_POST['atkStat'] * 4);
    }
        if(in_array('Mage', $_POST['expClass'])){
            echo "Mage was checked";
            echo "<br>";
        echo $_POST['num3'] + ($_POST['allStat'] * 8) + ($_POST['matkStat'] * 4);
        }
            if(in_array('Pirate', $_POST['expClass'])){
                echo "Pirate was checked";
                echo "<br>";
        echo $_POST['num2'] + ($_POST['allStat'] * 8) + ($_POST['atkStat'] * 4);
            }
                if(in_array('Warrior', $_POST['expClass'])){
                    echo "Warrior was checked";
                    echo "<br>";
        echo $_POST['num1'] + ($_POST['allStat'] * 8) + ($_POST['atkStat'] * 4);
                }
                    if(in_array('Archer', $_POST['expClass'])){
                        echo "Archer was checked";
                        echo "<br>";
        echo $_POST['num2'] + ($_POST['allStat'] * 8) + ($_POST['atkStat'] * 4);
                    }
}
echo "<br>";
    ?>
</body>
</html>