<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4</title>
</head>
<body>
<h1>Trabajo Práctico 4</h1>

<?php
$i = 0;
while($i < 5){
    print "<p>$i</p>\n";
    $i++;
}
echo "<br>";
?>
    <strong><p><u>Punto 1.</u></p></strong>
<?php
//MOSTRAR NUM DEL 1 AL 100
for($i = 1; $i <= 100; $i++){
    print "<p>$i</p>\n";
}
echo "<br>";
?>
    <strong><p><u>Punto 2.</u></p></strong>
<?php
//MOSTRAR NUM DEL 100 AL 1
for($i = 100; $i >= 1; $i--){
    print "<p>$i</p>\n";
}
echo "<br>";
?>
    <strong><p><u>Punto 3.</u></p></strong>
<?php
//NUMERO PAR
for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){

        print "<p>$i</p>\n";
    }
}
echo "<br>";
?>
    <strong><p><u>Punto 4.</u></p></strong>
<?php
//NUMERO IMPAR
for($i = 1; $i <= 100; $i++){
    if($i % 2){
        print "<p>$i</p>\n";
    }
}
echo "<br>";
?>
    <strong><p><u>Punto 5.</u></p></strong>
<?php
//SUMA DEL 1 A 20
for($i = 1; $i <= 20; $i++){
    $suma = $i + $i;
    echo ("Sumando el número: " .$i. " dos veces da como resultado: " .$suma);
    echo "<br>";
}
echo "<br>";
?>
    <strong><p><u>Punto 6.</u></p></strong>
<?php
//SUMA DE NUM PARES DEL 1 A 20
for($i = 1; $i <= 20; $i++){
    if($i % 2 == 0){
        $suma = $i + $i;
        echo ("Sumando el número: " .$i. " dos veces da resultado: " .$suma);
        echo "<br>";
    }
}
?>

</body>
</html>