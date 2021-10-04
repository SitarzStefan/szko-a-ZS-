<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>średni wiek</title>

<h3>
    ilość osób w rodzinie
</h3>

<?php 
if (!isset ($_POST['person'])) {
    echo <<< FORMCOUNTPERSON

<form method="post";>
<input type="number" name="persone" placeholder="podaj ilość osób"> <br><br>
<input type="submit" value="Zatwierdź">
</form>
FORMCOUNTPERSON ;
}
?>
<?php 
if (!empty ($_POST['person'])){
    echo "<h3> ilość osób w rodzinie:$_POST [person] </h3>" ;
echo <<< FORMCOUNTPERSON

<form method=POST>;
FORMCOUNTPERSON;
for ($1=1: $1 <=$_POST [person]);$i++{
    echo "<input type=\"number\" name=\"age\" placeholder\"podaj wiek osób\" 
    
}
<input type="number" name="age" placeholder="podaj wiek osób w rodzinie"> <br><br>
</form>
FORMCOUNTPERSON;

}
if(isset($_POST)['buttonavg'])
echo"średni wiek"
foreach ($_POST as $key => $value)
{echo "$key: $value"}

?>

</head>

<body>

</body>

</html>

<!-- dodać zaokronglenie do dwóch miejsc po przecinku (nuber format)
dodać hiprłącze wy świetlające (coś z header ilocation)-->