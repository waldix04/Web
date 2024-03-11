<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neue Supersportwagen</title>
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="icon" href="../../favicon.png">
</head>
<body>

<header>
<?php include '../../php/templates/header.php'; ?>
</header>

<main>
    <section>
        <h1>Unsere Auswahl neuer Supersportwagen</h1>
        <table>
            <caption>Unsere Neuen Top-seller</caption>
            <thead>
                <tr>
                    <th>Modell</th>
                    <th>Hersteller</th>
                    <th>Baujahr</th>
                    <th>Bild</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>F8 Tributo</td>
                    <td>Ferrari</td>
                    <td>2024</td>
                    <td><img src="../../assets/images/novitec-ferrari-f8-tributo.jpg" alt="Ferrari F8 Tributo" width="100"></td> <!-- Pfad zum Bild anpassen -->
                </tr>
                <tr>
                    <td>Aventador</td>
                    <td>Lamborghini</td>
                    <td>2024</td>
                    <td><img src="../../assets/images/lamborghini-aventador-ultimae-2021-01.jpg" alt="Lamborghini Aventador" width="100"></td> <!-- Pfad zum Bild anpassen -->
                </tr>
                <!-- Fügen Sie weitere Zeilen für zusätzliche Autos hier hinzu -->
            </tbody>
            <tfoot>
                <tr>
                    <td>Autozustand</td>
                    <td>Ferrari:<br> Neu</td>
                    <td>Lamborghini:<br> Neu</td>
                </tr>
            </tfoot>
        </table>
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
  <!-- Karosserie -->
  <path d="M20,50 L80,50 L70,90 L30,90 Z" fill="#007bff" />
  <!-- Fenster -->
  <rect x="35" y="60" width="30" height="20" fill="#ffffff" />
  <!-- Räder -->
  <circle cx="30" cy="90" r="8" fill="#000000" />
  <circle cx="70" cy="90" r="8" fill="#000000" />
</svg>

    </section>
</main>

<footer>
<?php include '../../php/templates/footer2.php'; ?>
</footer>

</body>
</html>
