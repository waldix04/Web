<?php
session_start();

// Verarbeiten der Login-Daten (Beispiel)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Überprüfung der Anmeldedaten
    // Hinweis: Passwörter sollten mit password_verify überprüft werden

    $_SESSION['loggedin'] = true; // Benutzer als eingeloggt markieren
    header('Location: Frari.php'); // Weiterleitung zur Hauptseite nach erfolgreichem Login
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="frari.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="login.php">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Einloggen</button>
    </form>
</body>
</html>
