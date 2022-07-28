<?php
    require_once("../classes/Cat.php");
    require_once("../classes/Dog.php");
    require_once("../classes/Cow.php");
    require_once("../classes/Unicorn.php");

    $temp_cat = new Cat(['sound' => 'chop', 'height' => 5]);
    $arr = Cat::create([
        ['name' => 'curry'],
        ['name' => 'fifi'],
        ['name' => 'max']
    ]);
    
    echo $temp_cat->get('height');
    var_dump($arr);

?>