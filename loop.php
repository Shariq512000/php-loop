<?php

// $i = 1;

// while($i <= 100){
//     echo $i . "<br>";
//     $i++;
// }

// $randomNum = rand(0 , 100);

// for($i=1; $i <= 100; $i++){
//     $randomNum = rand(0 , 100);
//     echo $randomNum . " for loop <br>";
// }

for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FIZZ BUZZ <br>";
    }elseif($i % 3 == 0){
        echo "FIZZ <br>";
    }elseif($i % 5 == 0){
        echo "BUZZ <br>";
    }else{
        echo $i . "<br>";
    }
}

?>