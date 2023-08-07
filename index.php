<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        city:<select>
    <?php
    $col = mysqli_connect("localhost","root","", "city")or die("not app");
    $qury ="SELECT * FROM state";
    $result = mysqli_query($col,$qury);
    while($row = mysqli_fetch_assoc($result)){
    ?>
    
<option value ="<?php echo $row["cid"];?>"><?php echo $row["city"];?>
 </option>
<?php
} 
mysqli_close($col);
?>
        </select>
    


    </form>
</body>
</html>