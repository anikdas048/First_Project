<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        First
    </div>
    <?php
        $var1=5;
        $var2=6;
        echo $var1+$var2;
        echo $var1-$var2;
        echo"<br>";
        $var=(true and true);
        echo var_dump($var);
        echo "<br>";

        $var4=25;
        if($var4>40){
           echo "party";

        }
        else{
            echo "party not";
        }

        echo "<br>";
        $lan=array('a','b','f');
        $num=0;
        while ($num < count($lan)){
            echo $lan[$num];
            $num++;
            echo "<br>";
        }

        for ($i=0; $i < count($lan); $i++) { 
            echo $lan[$i];
            echo "<br>";

        }

        foreach($lan as $val){
            echo $val;
            echo "<br>";
        }

        function number($number){
            
            echo $number;
        }
        number(90)
    ?>
</body>
</html>