<?php 
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, aut, explicabo fugiat repellat dolor iure aperiam, sed molestias est deserunt natus inventore incidunt suscipit soluta adipisci esse perferendis accusantium amet."
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p>
        <strong>Testo:</strong> <?php echo $text ?>
    </p>
    <p>
        <strong>Lunghezza testo:</strong> <?php echo strlen($text) ?> caratteri
    </p>
</body>
</html>

<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->