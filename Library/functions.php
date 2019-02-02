<?php
  function create_dropdown($values){
    $results="";
    foreach($values as $value){
        $results = "<option>".$value."</option>";
    }
    return $results;
}

function display_navigation($nav_links, $className=null)
{   
    echo "<ul>";
    foreach ($nav_links as $key => $value) {
        echo "<li class='$className'><a href='" . $value . "'>" . $key . "</a></li>";
    }
    echo "</ul>";
}