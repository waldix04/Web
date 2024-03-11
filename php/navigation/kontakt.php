<?php
// Prüfen, ob das Formular abgesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $besucherEmail = $_POST['email'];
    $nachricht = $_POST['nachricht'];

    // E-Mail-Adresse, an die die Nachricht gesendet werden soll
    $empfaenger = "info@ihrdomain.de";
    $betreff = "Neue Kontaktanfrage von Ihrer Webseite";

    // E-Mail-Header
    $header = "From: $besucherEmail\r\n";
    $header .= "Reply-To: $besucherEmail\r\n";
    $header .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Nachricht senden
    $mailGesendet = mail($empfaenger, $betreff, $nachricht, $header);

    if ($mailGesendet) {
        $feedback = "Vielen Dank! Ihre Nachricht wurde gesendet.";
    } else {
        $feedback = "Leider gab es ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";
    }
}
?>




<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="icon" href="../../favicon.png">
</head>
<body>

<header>

<?php include '../../php/templates/header.php'; ?>
</header>

<main>
    <section>
        <h1>Kontaktieren Sie uns</h1>
        <?php if (!empty($feedback)): ?>
            <p><?php echo $feedback; ?></p>
        <?php endif; ?>
        <form method="post" action="kontakt.php">
            <label for="email">Ihre E-Mail-Adresse:</label>
            <input type="email" id="email" name="email" placeholder="*" required>

            <label for="nachricht">Ihre Nachricht:</label>
            <textarea id="nachricht" name="nachricht" placeholder="*" required></textarea>

            <input type="submit" value="Nachricht senden">
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <section>
        <h2>Ihre eingereichte Nachricht:</h2>
        <p><strong>E-Mail-Adresse:</strong> <?php echo htmlspecialchars($besucherEmail); ?></p>
        <p><strong>Nachricht:</strong> <?php echo nl2br(htmlspecialchars($nachricht)); ?></p>
    </section>
<?php endif; ?>
    </section>
</main>


<?php include '../../php/templates/footer2.php'; ?>


</body>
</html>
