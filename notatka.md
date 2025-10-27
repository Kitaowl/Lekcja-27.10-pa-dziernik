# Notatka z kodu PHP — pobieranie danych

```php
1. Połączenie z bazą

$mySQLconnect = new mysqli("localhost", "root", "", "crud");
if ($mySQLconnect->connect_error) {
        echo "Wystąpił błąd i nie udało się połączyć z bazą danych: ". $mySQLconnect->connect_error;
    } else {
        echo "Połączono z bazą danych! </br>";
    }
```
2. Pobieranie danych
```php
$sql = 'SELECT * FROM crude';
        $result = $mySQLconnect->query($sql);
        // $result = $result->fetch_assoc();

3. Wyświetlanie wyników

while($row = $result->fetch_assoc()){
            echo 'test'.$row['name'].' '.$row['lastname'];
        }
