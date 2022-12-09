<?php
$localhost="localhost";
$username="root";
$password=" ";
$db_name="my_pro";

$conn= mysqli_connect('localhost', 'root', '', 'my_pro');
if (!$conn) {
    echo "faild to connect";
    exist();
}
?>