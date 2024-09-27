<?php
$name = $_POST['names'];
$pass = $_POST['password'];
function display(){
echo "<script>alert($name)</script>";
}
?>