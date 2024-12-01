<!DOCTYPE html>
<html lang="en">
<head>
    <!-- temchi google taamal getbootstrap mbaad getstart w mbaad copier f introduction partie css
    mbaad andek component mbaad card mbaad copier le code card -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Protest+Revolution&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show Products</title>
    <style>
        h2{
            font-family: "Fira Sans", sans-serif;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
            width:60%;
        }
        .card-body a {
            margin-right: 10px; /* Ajoute un espace entre les boutons */
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <!--      div.main(jarrabhha)  div#main   form w mba3ed entree     link:css   enctype="multipart/form-data" : hedhi bevch tnajam tuploadi image f dossier images    -->
    <div class="main">
        <center>
            <h2>Show all products</h2>

            <?php
            include("config.php");
            $result = mysqli_query($conn, "SELECT * FROM prod");
            while ($row = mysqli_fetch_array($result)) {
                echo "
                <center>
                    <main>
                        <div class='card' style='width: 18rem;'>
                            <img src='$row[img]' class='card-img-top' alt='Product Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>$row[name]</h5>
                                <p class='card-text'>$row[price]</p>
                                <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete Product</a>
                                <a href='update.php?id=$row[id]' class='btn btn-primary'>update Product</a>
                            </div>
                        </div>  
                    </main>
                </center>
                ";
            }
            ?>
        </center>
    </div>
</body>
</html>
