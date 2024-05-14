<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <title>Visualizzazione Percorso</title>
    <style>
        #map {
            height: 700px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Visualizzazione Percorso</h1>
    <div id="map"></div>
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <script>
        var map = L.map('map').setView([0, 0], 2); // Imposta la posizione e lo zoom iniziale della mappa

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        <?php include 'data.php'; ?>

        for (var i = 0; i < coordinates1.length; i++) {
            L.marker(coordinates1[i]).addTo(map);
            if (i > 0) {
                var line = [coordinates1[i - 1], coordinates1[i]];
                L.polyline(line, {color: 'blue'}).addTo(map);
            }
        }

        for (var i = 0; i < coordinates2.length; i++) {
            L.marker(coordinates2[i]).addTo(map);
            if (i > 0) {
                var line = [coordinates2[i - 1], coordinates2[i]];
                L.polyline(line, {color: 'red'}).addTo(map);
            }
        }
    </script>
</body>
</html>