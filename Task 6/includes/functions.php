<?php
function getTitle(){
    GLOBAL $title;
    if(isset($title)){
        echo $title;
    }else{
        echo 'Default';
    }
}