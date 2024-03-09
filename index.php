<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Welt - Luxus und Leistung</title>
    <link rel="icon" href="./favicon.png">
    <link rel="stylesheet" href="./css/all.css">
</head>
<body>
    <header>
        <div class="logo">AutoWelt</div>
        <nav>
            <ul>
              <!-- <li><a href="./php/navigation/home.php">Home</a></li> -->
                <li><a href="./php/navigation/neuwagen.php">Neuwagen</a>
                <li><a href="./php/navigation/gebrauchtwagen.php">Gebrauchtwagen</a></li>
                <li><a href="./php/navigation/kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
        
    </header>

    <main>
        <section class="hero">
            <h1>Luxusautos, die begeistern</h1>
            <p>Entdecken Sie unser Angebot an Hochleistungs-Sportwagen und luxuriösen Limousinen.</p>
        </section>

        <section class="featured">
            <article>
                <img src="./assets/images/aventador.jpg" alt="Lamborghini Aventador">
                <h2>Lamborghini Aventador</h2>
                <p>Der Lamborghini Aventador vereint beeindruckende Leistung mit atemberaubendem Design.</p>
                <a href="./php/carexamples/lamborghini-aventador-info.php" class="btn">Mehr erfahren</a>
            </article>
            
            <article>
                <img src="./assets/images/ferrarif8tributo.jpg" alt="Ferrari F8">
                <h2>Ferrari F8 Tributo</h2>
                <p>Ein Tribut an die unübertroffene Leistungsfähigkeit der Ferrari V8-Motoren.</p>
                <a href="./php/carexamples/ferrari-f8-info.php" class="btn">Mehr erfahren</a>
            </article>
        </section>

        <aside>
            <h3>Neuigkeiten & Events</h3>
            <ul>
                <li><a href="./php/info/autoshow.php">Auto Show 2024: Was zu erwarten ist</a></li>
                <li><a href="./php/info/enthüllung.php">Lamborghini enthüllt neues Modell</a></li>
            </ul>
        </aside>
    </main>

    <footer>
    <?php include './php/templates/footer.php'; ?>
</footer>
</body>
</html>
