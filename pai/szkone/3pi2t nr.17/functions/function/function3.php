<?php
function show()
{
    echo "Funkcja SHOW<br>";
}
function show1()
{
    return "funkcja SHOW1<br>";
}
function validateName($name, $len)
{
    return substr(ucfirst(strtolower(trim($name))), 0, $len);
    
}
?>