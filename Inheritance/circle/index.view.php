<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="number" name="radius" value="<?= $radius??null?>">
    <input type="text" name="color" value="<?= $color??null?>">
    <input type="number" name="h" value="<?= $h??null?>">
    <input type="submit" name="sub" value="OK">
</form>
</body>
</html>