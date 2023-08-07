<?php

$dimpal_id = $_GET["id"];


$col = mysqli_connect("localhost","root","", "dimpal")or die("not app");
$qury ="DELETE FROM AGG WHERE id = '{$dimpal_id}'";
$result = mysqli_query($col,$qury) or die("failed to load");

mysqli_close($col);

?>