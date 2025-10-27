<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude</title>
</head>
<body>
    <p>ehrj</p>
    <?php

// use LDAP\Result;

    $mySQLconnect = new mysqli("localhost", "root", "", "crud");

    if ($mySQLconnect->connect_error) {
        echo "Wystąpił błąd i nie udało się połączyć z bazą danych: ". $mySQLconnect->connect_error;
    } else {
        echo "Połączono z bazą danych! </br>";

        $sql = 'SELECT * FROM crude';
        $result = $mySQLconnect->query($sql);
        // $result = $result->fetch_assoc();

        while($row = $result->fetch_assoc()){
            echo 'test'.$row['name'].' '.$row['lastname'];
        }
    }

    ?>
</body>
</html>