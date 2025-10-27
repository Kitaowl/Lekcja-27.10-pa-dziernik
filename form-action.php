 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    echo $_POST['name'] . "<br>";
    echo $_POST['lastname'] . "<br>";
    echo $_POST['avatar'] . "<br>";

    $con new mysqli("localhost", "root", "", "crud")
    
    if ($con->connect_error) {
        die("Connection failed: " . $con_error);
    }

    $sql = 'INSERT INTO '
    ?>
    </body>
    </html>