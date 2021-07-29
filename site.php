<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

echo"<h1>Alex's Site</h1>"; 
echo"<hr>";
echo"<p>This is my site</p>";
//Variables
$characterName = "John";
$characterAge = 35;
echo"$characterName was $characterAge <br>" ; // <br> within quotes is break line
$characterName = "Alex"; // This updates the value of character name
echo"$characterName disliked his name and age <br>";
//Data types
$phrase = "To be or not to be";
$age = 15;
$gpa = 32.9;
$isMale = false;
echo 4.57; // Can also echo $phrase
echo "<br>";

//Working with strings
$phrase = "I really like you";
echo strtoupper($phrase); //Capitalizes all in the string 
echo strlen($phrase); // Gets the lenght of the string
echo $phrase[1]; // Prints the 2nd character of the string
echo $phrase[0] = "B"; // Changes the 1st character to "B"
    ?>

</body>
</html>