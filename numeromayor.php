<?php
$name = $_POST['name'];
$numberone = $_POST['n1'];
$numbertwo = $_POST['n2'];

echo "hola $name <br><br>";

if ($numberone == $numbertwo){
    echo "ambos numeros son iguales";
}
    else {
if ($numberone > $numbertwo) {
    $numbermayor = $numberone;
}
else {
    $numbermayor = $numbertwo;
}
echo "el numero mayor es $numbermayor";
    }

?>

<a href="index.php">nueva comparacion</a>