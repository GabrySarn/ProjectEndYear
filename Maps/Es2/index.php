<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizzazione dei Varchi su OpenStreetMap</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
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
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([45.4642, 9.1900], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        <?php include 'varchi.php'; ?>

        varchi.forEach(function (varco) {
            L.marker([varco.latitudine, varco.longitudine]).addTo(map)
                .bindPopup(`<b>${varco.nome}</b><br>${varco.autorizzazione}<br>Stato: ${varco.stato}`);
        });
    </script>


</body>

</html>