<?php
    include_once 'db.connect.php';
    $colorArray = array();

    function pushColor(){
        global $colorArray, $db;
        $sql = "INSERT INTO color (color) VALUES (:color)";
        $sth = $db->prepare($sql);
        for($i = 0; $i < 1000; $i++){
            $newColor = createColor();
            $params = array(":color" => $newColor);
            $sth->execute($params);
        }
    }



    function createColor(){
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        return $color;
    }
    pushColor();