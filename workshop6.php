<!DOCTYPE html>
<html lang="en">
<?php include "connect.php" ?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainWebofWk6</title>

    <script>
        //ฟังชันยืนยันการลบ
        function ConfirmDelete(username){
            let x = confirm("ต้องการลบ "+username+" ใช่หรือไม่");
            if(x == true){
                document.location = "wk6delete.php?username="+username;
            }
        }
    </script>
</head>
<body>
    <?php
        $member = $pdo->prepare("SELECT * FROM member");
        $member->execute();

        while($row=$member->fetch()){
    ?>
        ชื่อสมาชิก: <?=$row["username"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล: <?=$row["email"]?><br>
        <a href="wk6delete.php?username=<?=$row["username"]?>" 
        onclick='ConfirmDelete("<?=$row["username"]?>")'>ลบ</a>
        <hr>


    <?php } ?>
</body>
</html>