<?php
header('Access-Control-Allow-Origin:http://localhost:4200');
$user=array(
    'id'=>1,
    'name'=>'Nishit Manjarawala',
    'email'=>'nishit@natrix.com'
);
echo json_encode($user);
?>