<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>

<form action="static.php" method="post">

<input type="text" name="value1" >
<input type="text" name="value2" >

<button type="submit" name="Addition">sum</button>
   <button type="submit" name="Subtraction">Subtract</button>
   <button type="submit" name="Multiplication">Multiply</button>
   <button type="submit" name="Division">Divide by</button>  

</form>

<?php

 $a = $_POST["value1"];
 $b = $_POST["value2"];


class Calculator {

  
    public static function Adition($a , $b){


        echo ($a + $b);

    }


    public static function Subtraction($a , $b){


        echo ($a - $b);

    }

    public static function Multiply($a , $b){


        echo ($a * $b);

    }

    public static function Division($a ,$b){

        echo ($a / $b);

    }

}


if(isset($_POST["Addition"])){

    Calculator::Adition( $a , $b);

}

if(isset($_POST["Subtraction"])){

    Calculator::Subtraction( $a , $b);

}

if(isset($_POST["Multiplication"])){
 
    Calculator::Multiply( $a , $b);


}

if(isset($_POST["Division"])){

    Calculator::Division( $a , $b);

}

?>
</body>
</html>