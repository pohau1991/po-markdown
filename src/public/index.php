<?php
    require_once("../classes/Cat.php");
    require_once("../classes/Dog.php");
    require_once("../classes/Cow.php");
    require_once("../classes/Unicorn.php");

    $world = array();


    $temp_cat = new Cat(['name'=>'cheese', 'sound' => 'grrr', 'height' => 5]);
    echo $temp_cat->getOutput().'<br/>';
    $arr_cat = Cat::create([
        ['name' => 'curry'],
        ['name' => 'fifi'],
        ['name' => 'max']
    ]);
    foreach($arr_cat as $ac){
        echo $ac->getOutput().'<br/>';
    }
    
    $arr_unicorn = Unicorn::create([
        ['name' => 'timmy'], ['name' => 'tommy'] 
    ]);
    echo $arr_unicorn[0]->getOutput().'<br/>';

?>