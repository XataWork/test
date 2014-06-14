<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14.06.14
 * Time: 19:46
 */
phpinfo();
echo 'Hellow world!!!';
$conn = mysqli_connect('localhost','root','123456','test');
if($conn){
    echo 'ok';
}else{
    echo 'Not connected';
}