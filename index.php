<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
$numbers = "0123456789";
$uppercase_letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lowercase_letters = "abcdefghijklmnopqrstuvwxyz";
$simbols = "!£$%&?*+@#-_~/<>()[]{}";
$full_chars = $numbers.$uppercase_letters.$lowercase_letters.$simbols;

if (isset($_GET["password-length"])) {
    $password_length = $_GET["password-length"];
    $result = "";

    if ($password_length >= 8 && $password_length <= 35) {
        $password = "";

        while (strlen($password) < $password_length) {
            $index = rand(0, (strlen($full_chars) - 1));
            $char = $full_chars[$index];
            $password .= $char;
        }
        $result = $password;
    }
}

// funzione che genera un numero random,
// in base al numero random prendo dall'array l'elemento (numero random = indice elemento),
// pusho l'elemento in un nuovo array password items,
// ripeto per ogni array,
// ripeto tutto n. volte = password_length,
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