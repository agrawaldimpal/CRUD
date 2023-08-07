<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datasave.php" method="post">

        Name:<input type="text" name="name">
        <br>
        <br>
        Email:<input type="email" name="email">
        <br>
        <br>
        age:<input type="number" name="age">
        <br>
        <br>
        <input type="submit">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th>

               

            </th>

        </tr>

         <?php
        $col = mysqli_connect("localhost","root","", "dimpal")or die("not app");
        $qury ="SELECT * FROM agg";
        $result = mysqli_query($col,$qury) or die("failed to load");
        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td><?php echo $row["id"];   ?></td>
            <td><?php echo $row["name"];   ?></td>
            <td><?php echo $row["email"];   ?></td>
            <td><?php echo $row["age"];   ?></td>
            <td>
         <a href="">edit</a>
        <a href="delete.php?id=<?php echo $row["id"];?>">delete</a></a>
       
       
       </tr>
        <?php
    }

        mysqli_close($col);


        ?>


    </table>


</body>
</html>