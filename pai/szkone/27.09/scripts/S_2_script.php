<?php
print_r($_POST);
if(!empty($_POST["figura"]) && !empty($_POST['GeometricFigure']))
{
    echo "ok"
    switch ($_POST['GeometricFigure']) {
        case 'kwadrat' ;
        header('location: ./square')
        
        break:
        case 'prostokąt':
            echo 'prostokąt' :
            break;
    }
}
else
?>

{<? }

?>