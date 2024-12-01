<?php
/* nesta3mlou dima name="" bech nadiw lel les elements */
include("config.php");
if(isset($_POST["upload"])){
    $name=$_POST["name"];
    $price=$_POST["price"];
    $img=$_FILES["img"];
    $img_location=$_FILES["img"]["tmp_name"];
    $img_name=$_FILES["img"]["name"];
    $img_up="images/".$img_name;
    $insert="INSERT into prod (name,price,img) values ('$name','$price','$img_up')";
    mysqli_query($conn,$insert);
    if(move_uploaded_file($img_location,'images/'.$img_name)){
        echo "<script> alert ('it is good')</script>";
    }
    else {
        echo "<script> alert ('there is a problem')</script>";

    }
    header("location:index.php");
}





?>