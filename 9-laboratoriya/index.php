<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 Laboratoriya ishi 5-variant</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
    <?php

        function fact($x){
            if($x<0)return false;
            if($x==0) return 1;
            return $x*fact($x-1);
        }
        function analyze($a){
            // $output = preg_match( "/^[0-9]+$/", '', $a );
            if($a && is_numeric($a)) return fact($a);
            return "Qiymatda xatolik";
        };
        $result =0;
        $data = $_POST['number'];
        $a = floor($a);
        if($data)
            $result =  $_POST['number']."!=".analyze($data);
    ?>

    <div class="container">
        <form method='POST' action="<?=$_SERVER['PHP_SELF'];?>" class="box">
            <input  disabled value="<?=$result; ?>"  id="result" type="text">
            <input autocomplete="off" value="0" name="number" id="input" type="text">
            <div class="keys">
                <div onclick="typeFunc(1)" class="cell number">1</div>
                <div  onclick="typeFunc(2)" class="cell number">2</div>
                <div  onclick="typeFunc(3)" class="cell number">3</div>

                <div onclick="clearInput()" class="cell">C</div>

                <div  onclick="typeFunc(4)" class="cell number">4</div>
                <div  onclick="typeFunc(5)" class="cell number">5</div>
                <div  onclick="typeFunc(6)" class="cell number">6</div>

                <div  onclick="typeFunc(0)" class="cell number">0</div>
            
                <div  onclick="typeFunc(7)" class="cell number">7</div>
                <div  onclick="typeFunc(8)" class="cell number">8</div>
                <div  onclick="typeFunc(9)" class="cell number">9</div>
                <button type="submit" class="cell">!</button>            
            </div>
        </form>
    </div>
</body>
<script src="./assets/js/js.js"></script>
</html>