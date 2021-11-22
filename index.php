<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BEGINNING</title>
</head>
<body>
    <h1>HELLO PHP</h1>`

    <form action="index.php" method="post">
            Enter your name: <input name="name" type="text">
            <input type="submit">
    </form>
<?php
        $name = $_POST["name"];
        
        echo "Hello, ".$name;
?>
</body>
</html>