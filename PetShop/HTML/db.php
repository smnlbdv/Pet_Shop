<?php

$db = new PDO ("mysql:host=PetShop;dbname=Pet_Shop","root","/4OCW2OBH.liZ6.F" ); 
$info=[];
if ($query = $db->query("SELECT * FROM Akzii")){
    echo "<pre>";
    $info=$query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
}
else
{
print_r($db->errorInfo());
}

$info_games =[];

foreach($info as $i)
{
    if($i["id"] == $_COOKIE['info'])
    {
        array_push($info_games, $i);
    }
}




