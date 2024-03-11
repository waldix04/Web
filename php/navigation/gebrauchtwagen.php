<?php
// Angenommene Daten der Gebrauchtwagen
$gebrauchtwagen = [
    ['Modell' => 'BMW M3', 'Jahr' => 2018, 'Kilometer' => 50000, 'Preis' => 55000, 'Bild' => '../../assets/images/bmw-m3.jpg'],
    ['Modell' => 'Audi S4', 'Jahr' => 2017, 'Kilometer' => 75000, 'Preis' => 47000, 'Bild' => '../../assets/images/audi s4.jpg'],
    // Fügen Sie hier weitere Gebrauchtwagen hinzu
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

<header>
<?php include '../../php/templates/header.php'; ?>
</header>

<main>
    <section>
        <h1>Unsere Auswahl an Gebrauchtwagen</h1>
        
        <!-- Filter-Formular -->
        <form method="post" action="gebrauchtwagen.php">
            <label for="minPreis">Min. Preis:</label>
            <input type="number" id="minPreis" name="minPreis">
            
            <label for="maxPreis">Max. Preis:</label>
            <input type="number" id="maxPreis" name="maxPreis">
            
            <label for="maxKilometer">Max. Kilometer:</label>
            <input type="number" id="maxKilometer" name="maxKilometer">
            
            <input type="submit" value="Filtern">
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
            <tfoot>
                <tr>
                    <td>Summe</td>
                    <td></td>
                    <td>125.000</td>
                    <td>102.000</td>
                </tr>
            </tfoot>
        </table>
    </section>
</main>

<footer>
<?php include '../../php/templates/footer2.php'; ?>
</footer>

</body>
</html>
