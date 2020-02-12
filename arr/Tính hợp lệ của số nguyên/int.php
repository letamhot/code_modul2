<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer</title>
</head>
<body>
    <form action="int.php" method="post">
    <input type="number" name="x" value="<?= $x??null ?>">
    <input type="submit" name="sub" value="Gửi">
    </form>
    <?php
        
        if (isset($_POST['sub'])) {
            $x = $_POST['x'];
            for( $i = 0; $i <100;$i++){
                }
               
            }       
        }
    ?>
</body>
</html>