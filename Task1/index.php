<?php


//Display the greeting message and check the name
if(isset($_GET['name']))
{
    echo  "<h2> welcome  $_GET[name]</h2> " ;
}
else
{
    echo "<h2> Welcome, Guest </h2>";
}

//check the age
if(isset($_GET['age']))
{
    if ($_GET['age'] >= 21)
    {
        echo 'you are legal to access certain content' ;
    }
    else
    {
        echo  21 - $_GET['age'] . "year you need to become legal." ;
}
}
else
{
    return ;
}