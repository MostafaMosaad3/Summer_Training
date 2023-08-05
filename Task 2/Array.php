<?php

$array = array(1,2,3,4,5,6,7,8,9,10,1,3,5,7,9,1,3,5,7,9);

function FindElement($array , $i)
{
    $counter = 0 ;
    foreach ( $array as $element )
    {
        if ( $i == $element)
        {
            $counter ++ ;
        }
    }

    if($counter == 0)
    {
        echo "the element is not found" ;
    }
    else
    {
        echo "the element is " . $i;
        echo "<br>";
        echo "the number of occurences is " . $counter;
    }
}

FindElement($array ,3) ;