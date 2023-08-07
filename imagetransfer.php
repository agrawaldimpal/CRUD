<?php
if(isset($_FILES['fileToUploade'])){
    $errors = array();

    $file_name = $_FILES['fileToUploade']['name'];
    $file_size = $_FILES['fileToUploade']['size'];
    $file_tmp = $_FILES['fileToUploade']['tmp_name'];
    $file_type = $_FILES['fileToUploade']['type'];
    $file_ext = end(explode('.', $file_name));
    $extentions = array("jpeg","jpg","png");

    if(in_array($file_ext, $extentions) === false)
    {
        $errors[] = "This extention file not allowed , please choose a JPG or PNG files";
    }
    if($file_size > 2097152){
        $errors[] = "files size must be 2mb or lower.";
    }
    
    if(empty($errors) == true){
        move_uplodede_files($_FILES['fileToUploade']['tmp_name'],"uploade/". $file_name);
    }else{
        print_r($errors);
    }
    }    

    $col = mysqli_connect("localhost","root","", "dimpal")or die("not app");
    $qury ="INSERT INTO image(fileToUploade) VALUES('{$file_name}')";
    $result = mysqli_query($col,$qury) or die("failed to load");
    

    mysqli_close($col);


?>