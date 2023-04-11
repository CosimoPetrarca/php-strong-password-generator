<?php
/* controllo se l'imput ha ricevuto un valore */
if (!empty($_GET['lunghezza_password'])) {
    $lunghezza = $_GET['lunghezza_password'];
}
/* funzione per generare password randomica */
function generatorePassword($lunghezza)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789{}[]|\:;"<>,.?/!@#$%^&*';
    return substr(str_shuffle($caratteri), 0, $lunghezza);
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
    <h1>Strong Password Generator</h1>

	<form method="GET" action="">
		<label for="lunghezza_password">Lunghezza password:</label>
		<input type="number" id="lunghezza_password" name="lunghezza_password" placeholder="Inserisci il numero di caratteri">
		<input type="submit" value="Genera password">
	</form>

    <?php if (!empty($_GET['lunghezza_password'])) : ?>
            <p><?php echo generatorePassword($lunghezza); ?></p>
     <?php endif; ?>
</body>
</html>
