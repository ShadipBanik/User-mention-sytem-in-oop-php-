<?php

header('Content-Type:application/json');

$usernames=[
    
    'shadipjg',
    'janodeo',
    'janiyadeo5',
    'janiyadeo',
    'janiyadeo1',
    'janiyadeo2',
    'janiyadeo3',
    'janiyadeo4',
    'munnna'
    
    
];


$results=array_slice(array_values(array_filter($usernames,function($name){
    
    
   return strpos($name,$_GET['q'])===0;
    
   
})), 0,5);
echo json_encode($results);

?>