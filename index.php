<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("./client/commonFile.php")
    ?>

    <title>Document</title>
</head>
<body>
    <?php
        include("./client/header.php")
    ?>

    <?php 
    if (isset($_GET["signup"])) { 
        include("./client/signupForm.php"); 
    } elseif(isset($_GET["signin"])){
        include("./client/singinForm.php");
    }
    ?>

</body>
</html>