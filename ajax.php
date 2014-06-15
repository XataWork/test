<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14.06.14
 * Time: 20:13
 */
$a = $_POST['data'];
$temp = array(
    'test' => $a,
    'test1' => 'blablabla'
);
header('Content-Type: application/json');
echo json_encode($temp);
echo "test";