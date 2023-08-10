<?php

$file_name = $_GET['file'] ;

if(!file_exists($file_name)) {
    fopen($file_name, 'w');

}

$users =array(
    'names' =>$_GET['names'] ,
    'ages' =>$_GET['age'] ,
    'departments' =>$_GET['department']
) ;


file_put_contents($file_name , print_r($users , true));




