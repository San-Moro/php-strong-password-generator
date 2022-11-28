<!-- **Milestone 1**
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$uppercase_letters = ["A", "B", "C", "D", "E"," F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$lowercase_letters = ["a", "b", "c", "d", "e"," f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$simbols = ["!", "£", "$", "%", "&"," ?", "*", "+", "@", "#", "-", "_", "~"];

// funzione che genera un numero random,
// in base al numero random prendo dall'array l'elemento (numero random = indice elemento),
// pusho l'elemento in un nuovo array password items,
// ripeto per ogni array,
// ripeto tutto n. volte = password_length,



function generatePasswordItems($numbers, $uppercase_letters, $lowercase_letters, $simbols ) {
    $rnd_number = rand(0, 9);
    $password_items[] = $numbers["$rnd_number"];
    $rnd_number = rand(0, 25);
    $password_items[] = $uppercase_letters["$rnd_number"];
    $rnd_number = rand(0, 25);
    $password_items[] = $lowercase_letters["$rnd_number"];
    $rnd_number = rand(0, 12);
    $password_items[] = $simbols["$rnd_number"];
    var_dump($password_items);
}

$password_length = $_GET["password-length"] ?? "";
if(!empty($password_length)) {
    echo "genero password";

    generatePasswordItems($numbers, $uppercase_letters, $lowercase_letters, $simbols);
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
                <input type="text" id="password-length" name="password-length">
                <div>
                    <button type="submit">Invia</button>
                    <button type="reset">Annulla</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>