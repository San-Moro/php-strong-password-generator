<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->
<?php
$password_length = $_GET["password-length"] ?? "";
var_dump($password_length);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <main>
        <div class="container">
            <form action="index.php" method="GET">
                <label for="password-length">Lunghezza Password: </label>
                <input type="text" id="password-length" name="password-length">
            </form>
            <div>
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </div>
        </div>
    </main>
</body>
</html>