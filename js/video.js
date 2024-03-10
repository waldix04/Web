document.addEventListener("DOMContentLoaded", function() {
    var video = document.getElementById('meinVideo');
    var button = document.getElementById('videoButton');

    button.addEventListener('click', function() {
        video.style.display = "block"; // Das Video anzeigen
        video.play(); // Startet die Wiedergabe des Videos
        button.style.display = "none"; // Versteckt den Button, nachdem er geklickt wurde
    });
});

//Einbettung funktioniert leider nicht 