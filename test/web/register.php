<?php
// Verarbeiten der Registrierungsdaten (Beispiel)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validierung und Speichern der Registrierungsdaten in der Datenbank
    // Hinweis: Passwörter sollten immer verschlüsselt gespeichert werden (z.B. mit password_hash)

    header('Location: login.php'); // Weiterleitung zur Login-Seite nach erfolgreicher Registrierung
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
    <link rel="stylesheet" href="frari.css">
</head>
<body>
    <h1>Registrierung</h1>
    <form method="post" action="register.php">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Registrieren</button>
    </form>
</body>
</html>
