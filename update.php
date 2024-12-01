<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Revolution&display=swap"
 rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!--      div.main(jarrabhha)  div#main   form w mba3ed entree     link:css   enctype="multipart/form-data" : hedhi bevch tnajam tuploadi image f dossier images    -->
    <?php
        include("config.php");

        $ID = $_GET['id'];
        $up=mysqli_query($conn, "SELECT * FROM prod WHERE id = $ID");
        $data=mysqli_fetch_array($up);

        
?>
    <div class="main">
        <form action="up.php" method="POST" enctype="multipart/form-data">
            <center>
            <h2> Update Product</h2>
            <input type="text" name="id" value="<?php echo $data['id']?>">
             <br>
            <input type="text" name="name" value="<?php echo $data['name']?>">
            <br>
            <input type="text" name="price" value="<?php echo $data['price']?>">
            <br>
            <input type="file" id="file" name="img" style="display:none">
            <label for="file">update the image of product</label>
            <button name="update">update product</button>
            <br><br>
            <a href="products.php">all the products</a>
            <p> DEVOLPPED BY ZAHRA </p>
            </div>






            </center>
        </form>
</body>
</html>