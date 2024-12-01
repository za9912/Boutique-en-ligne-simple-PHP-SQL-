<?php
/* nesta3mlou dima name="" bech nadiw lel les elements */
include("config.php");
if(isset($_POST["update"])){
    $id=$_POST['id'];
    $name=$_POST["name"];
    $price=$_POST["price"];
    $img=$_FILES["img"];
    $img_location=$_FILES["img"]["tmp_name"];
    $img_name=$_FILES["img"]["name"];
    $img_up="images/".$img_name;
    $updatee="UPDATE prod SET name='$name' ,price='$price', img='$img_up' WHERE id=$id";
    mysqli_query($conn,$updatee);
    if(move_uploaded_file($img_location,'images/'.$img_name)){
        echo "<script> alert ('it is good')</script>";
    }
    else {
        echo "<script> alert ('there is a problem')</script>";

    }
    header('location:products.php');
}





?>