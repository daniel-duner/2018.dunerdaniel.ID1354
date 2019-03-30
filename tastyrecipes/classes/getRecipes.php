<?php
    session_start();
    $xml = simplexml_load_file('../resources/xml/recipes.xml');
    $recipe_id = $_SESSION['recipe_id'];
    $name = $xml->recipe[$recipe_id]->title;
    $img = $xml->recipe[$recipe_id]->imagepath;
    $meas = $xml->recipe[$recipe_id]->measurement->li;
    $ing = $xml->recipe[$recipe_id]->ingredient->li;
    $dir= $xml->recipe[$recipe_id]->recipetext->li;
    $alt = $xml->recipe[$recipe_id]->alt;

    $recipe = ["name"=>$name, "img"=>$img, "meas"=>$meas, "ing"=>$ing, "dir"=>$dir, "alt"=>$alt];

    echo \json_encode($recipe, JSON_PRETTY_PRINT);
?>