<?php
use LDAP\Result;
class Owner{
    var $ID_O;
    var $Namr;
    var $Surname;
    var $PESEL;
    static $connect;
    static $sql;
    static function all(){
    $connect = new mysqli('localhost','root','','baza ormo');
    $sql ="SELECT * FROM `owners`";
    $result=$connect->query($sql);
    //var_dump($result);
        while($owners=$result->fetch_assoc() ){
        echo  $owners['ID_O'];
        echo  $owners['Name'];
        echo  $owners['Surname'];
        echo  $owners['PESEL'];
        }
    }

    static function cars(){
        $connect = new mysqli('localhost','root','','baza ormo');
        $cars = "SELECT * FROM `cars` WHERE `ID_O`= 1";
        $result=$connect->query($cars);
        while($owners=$result->fetch_assoc() ){
            echo  $owners['ID_O'];
            echo  $owners['Marka'];
            echo  $owners['Model'];
            echo  $owners['tablice'];
    }
}
    static function companies(){
        $connect = new mysqli('localhost','root','','baza ormo');
        $companies = "SELECT * FROM `companies` WHERE `ID_O`= 1";
        $result=$connect->query($companies);
        while($owners=$result->fetch_assoc() ){
            echo  " ID:".    $owners['ID_O']. " ";
            echo  "Adres:". $owners['Adres']. " ";
            echo  "NIP:".   $owners['NIP']. " ";
            echo  "Nazwa:". $owners['Name_C']. " ";
    }
    }
}

class Car{
    var $ID_O;
    var $Namr;
    var $Surname;
    var $PESEL;
    static $connect;
    static $sql;
    static function all(){
        $connect = new mysqli('localhost','root','','baza ormo');
        $sql ="SELECT * FROM `cars`";
        $result=$connect->query($sql);
        //var_dump($result);
            while($owners=$result->fetch_assoc() ){
            echo  $owners['ID_O'];
            echo  $owners['Name'];
            echo  $owners['Surname'];
            echo  $owners['PESEL'];

            }

        }
        static function owners(){
            $connect = new mysqli('localhost','root','','baza ormo');
            $cars = "SELECT * FROM `owners` WHERE `ID_O`= 1";
            $result=$connect->query($cars);

                while($owners=$result->fetch_assoc() ){
                    echo  $owners['ID_O'];
                    echo  $owners['Name'];
                    echo  $owners['Surname'];
                    echo  $owners['PESEL'];
                    }
        }
    
    static function companies(){
        $connect = new mysqli('localhost','root','','baza ormo');
        $companies = "SELECT * FROM `companies` WHERE `ID_O`= 1";
        $result=$connect->query($companies);
        while($owners=$result->fetch_assoc() ){
            echo  " ID:".    $owners['ID_O']. " ";
            echo  "Adres:". $owners['Adres']. " ";
            echo  "NIP:".   $owners['NIP']. " ";
            echo  "Nazwa:". $owners['Name_C']. " ";
    }
    }
}
class Company{
    var $ID_O;
    var $Namr;
    var $Surname;
    var $PESEL;
    static $connect;
    static $sql;
    static function all(){
        $connect = new mysqli('localhost','root','','baza ormo');
        $sql ="SELECT * FROM `companies`";
        $result=$connect->query($sql);
        //var_dump($result);
            while($owners=$result->fetch_assoc() ){
                echo  " ID:".    $owners['ID_O']. " ";
                echo  "Adres:". $owners['Adres']. " ";
                echo  "NIP:".   $owners['NIP']. " ";
                echo  "Nazwa:". $owners['Name_C']. " ";
            }
        }
        static function owners(){
            $connect = new mysqli('localhost','root','','baza ormo');
            $cars = "SELECT * FROM `owners` WHERE `ID_O`= 1";
            $result=$connect->query($cars);
            while($owners=$result->fetch_assoc() ){
                echo  $owners['ID_O'];
                echo  $owners['Name'];
                echo  $owners['Surname'];
                echo  $owners['PESEL'];
                }
        }
    
    static function cars(){
        $connect = new mysqli('localhost','root','','baza ormo');
        $companies = "SELECT * FROM `cars` WHERE `ID_O`= 1";
        $result=$connect->query($companies);
        while($owners=$result->fetch_assoc() ){
            echo  " ID:".    $owners['ID_O']. " ";
            echo  "Model:". $owners['Model']. " ";
            echo  "VIN:".   $owners['VIN']. " ";
            echo  "tablice:". $owners['tablice']. " ";
    }
    }
}

Owner::all();
Owner::cars();
Owner::companies();

Car::all();
Car::owners();
Car::companies();

Company::all();
Company::cars();
Company::owners();
?>

