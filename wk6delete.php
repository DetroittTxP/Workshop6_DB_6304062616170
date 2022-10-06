<!DOCTYPE html>
<html lang="en">
<?php include "connect.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deleteMEMBER</title>
</head>
<body>
    <?php
        $deletedata = $pdo->prepare("DELETE FROM member WHERE username=?");
        $deletedata->bindParam(1,$_GET["username"]);
        
        if($deletedata->execute())
            header("location:workshop6.php");
    ?>
</body>
</html>