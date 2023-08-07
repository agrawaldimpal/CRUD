<?php

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];


$col = mysqli_connect("localhost","root","", "dimpal")or die("not app");
$qury ="INSERT INTO agg(name,email,age) VALUES('{$name}','{$email}','{$age}')";
$result = mysqli_query($col,$qury) or die("failed to load");

mysqli_close($col);

?>