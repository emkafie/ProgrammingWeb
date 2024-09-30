<?php
    $loremIpsum = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Quibusdam vel sit itaque harum laudantium exercitationem facilis amet voluptatum repellendus placeat illo totam eligendi,
    incidunt magni saepe nam nobis repudiandae quam.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>