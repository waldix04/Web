<?php

$gebrauchtwagen = [
    ['Modell' => 'BMW M3', 'Jahr' => 2018, 'Kilometer' => 50000, 'Preis' => 55000, 'Bild' => '../../assets/images/bmw-m3.jpg'],
    ['Modell' => 'Audi S4', 'Jahr' => 2017, 'Kilometer' => 75000, 'Preis' => 47000, 'Bild' => '../../assets/images/audi_s4.jpg'],
   
];

// Filter-Logik
$gefilterteAutos = $gebrauchtwagen; // Standardmäßig alle Autos anzeigen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minPreis = $_POST['minPreis'] ?? 0;
    $maxPreis = $_POST['maxPreis'] ?? PHP_INT_MAX;
    $maxKilometer = $_POST['maxKilometer'] ?? PHP_INT_MAX;

    $gefilterteAutos = array_filter($gebrauchtwagen, function ($auto) use ($minPreis, $maxPreis, $maxKilometer) {
        return $auto['Preis'] >= $minPreis && $auto['Preis'] <= $maxPreis && $auto['Kilometer'] <= $maxKilometer;
    });
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebrauchtwagen</title>
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="icon" href="../../favicon.png">
</head>
<body>


<?php include '../../php/templates/header.php'; ?>


<main>
    <section>
        <h1>Unsere Auswahl an Gebrauchtwagen</h1>
        
       
        <form method="post" action="gebrauchtwagen.php">
    <label for="minPreis">Mindestpreis:</label>
    <input type="text" id="minPreis" name="minPreis" placeholder="*" required>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['minPreis'])): ?>
        <div>Gewählter Mindestpreis: <?php echo htmlspecialchars($_POST['minPreis']); ?></div>
    <?php endif; ?>

    <label for="maxPreis">Höchstpreis:</label>
    <input type="text" id="maxPreis" name="maxPreis" placeholder="*" required>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['maxPreis'])): ?>
        <div>Gewählter Höchstpreis: <?php echo htmlspecialchars($_POST['maxPreis']); ?></div>
    <?php endif; ?>

    <label for="maxKilometer">Maximale Kilometerleistung:</label>
    <input type="text" id="maxKilometer" name="maxKilometer" placeholder="*" required>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['maxKilometer'])): ?>
        <div>Gewählte maximale Kilometerleistung: <?php echo htmlspecialchars($_POST['maxKilometer']); ?></div>
    <?php endif; ?>

    <input type="submit" value="Suchen">
</form>


        <table>
            <thead>
                <tr>
                    <th>Modell</th>
                    <th>Baujahr</th>
                    <th>Kilometer</th>
                    <th>Preis</th>
                    <th>Bild</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gefilterteAutos as $auto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($auto['Modell']); ?></td>
                    <td><?php echo htmlspecialchars($auto['Jahr']); ?></td>
                    <td><?php echo htmlspecialchars($auto['Kilometer']); ?></td>
                    <td><?php echo htmlspecialchars($auto['Preis']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($auto['Bild']); ?>" alt="<?php echo htmlspecialchars($auto['Modell']); ?>" width="100"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>


<?php include '../../php/templates/footer2.php'; ?>


</body>
</html>
