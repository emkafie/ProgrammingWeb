<?php
    echo "<h2>Pertanyaan 10 </h2>";

    $pattern = '/[0-9]/'; // '/[a-z]/'; // Cocokkan huruf kecil. // Cocokan satu atau lebih digit.
    $text = 'There is 123 apples';
    
    if (preg_match($pattern,$text, $matches)) {
        echo "Cocokan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br>";
    echo "<h2>Pertanyaan 11</h2>";

    
    $pattern1 = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie';
    $new_text = preg_replace($pattern1, $replacement, $text);
    echo $new_text; // output : "I like banana pie."

    echo "<br>";
    echo "<h2>Pertanyaan 12</h2>";

    $pattern2 = '/go*d/';
    $text2 = 'god is good';
    if  (preg_match($pattern2, $text2, $matches)) {
        echo "Cocokan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    
    echo "<br>";
    echo "<h2>Pertanyaan 13</h2>";

    $pattern3 = '/go?d/';
    $text3 = 'god is good';
    if  (preg_match($pattern3, $text3, $matches)) {
        echo "Cocokan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    
    echo "<br>";
    echo "<h2>Pertanyaan 14</h2>";

    $pattern4 = '/[o]{1,3}/';
    $text4 = 'god is good';
    if  (preg_match($pattern4, $text4, $matches)) {
        echo "Cocokan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
?>