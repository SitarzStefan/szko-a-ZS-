<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>

<body>
    <h3> Dane z formularza</h3>
    <?php

require_once '../functions/function.php';
show();

echo '<br>';
if (!empty($_POST['imie']) && !empty($_POST['color'])) 
{
    $color = $_POST['color'];
    echo "<div style \"color:$color\">";
    echo "imie poprawione: " .$_POST['imie']." , dlugosc: " .strlen(validateName($_POST['imie']))."<br>";
    echo "imie bez poprawy: " .validateName($_POST['imie'], 4)." , dlugosc: " .strlen(validateName($_POST['imie']))."<br>";

}

    ?>

</body>

</html>