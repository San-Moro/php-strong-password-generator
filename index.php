<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
include __DIR__ ."/functions.php";

if (isset($_GET["password-length"])) {
    $password_length = intval($_GET["password-length"]);
    $result = generatePassword($password_length);
}

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
                <input type="number" id="password-length" name="password-length">
                <div>
                    <button type="submit">Invia</button>
                    <button type="reset">Annulla</button>
                </div>
            </form>
            <?php if(isset($result)) { ?>
            <section>
                <p><?php echo $result ?></p>
            </section>
            <?php } ?>
        </div>
    </main>
</body>
</html>