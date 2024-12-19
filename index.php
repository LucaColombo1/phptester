
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellina in PHP</title>
</head>
<body>
    <h1>Calcola la Tabellina</h1>

    <!-- Form per inserire il numero -->
    <form method="post">
        <label for="numero">Scegli un numero: </label>
        <input type="number" name="numero" id="numero" value="<?= htmlspecialchars($numero) ?>" required>
        <input type="submit" value="Calcola">
    </form>
    <?php
// Variabile per il numero scelto dall'utente
$numero = isset($_POST['numero']) ? $_POST['numero'] : 1; // Impostato su 1 di default

// Verifica se il numero inserito è valido
$errore = '';
if (isset($_POST['numero'])) {
    if (!is_numeric($numero) || $numero <= 0) {
        $errore = 'Per favore inserisci un numero valido maggiore di zero.';
        $numero = 1; // Reset del numero a 1 in caso di errore
    }    
}
?>

<?php
    // Se il numero è valido, calcoliamo e stampiamo la tabellina
    if (!$errore) {
        echo "<h2>Tabellina del numero $numero</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color: red;'>$errore</p>";
    }
    ?>
</body>
</html>
