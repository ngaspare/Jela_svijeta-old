<?php

echo "Dishes";

if (count($dishes) > 1){
    foreach($dishes as $dish){
        echo $dish->title;
    }    
}
else{
    echo "No Dishes found!";
}

