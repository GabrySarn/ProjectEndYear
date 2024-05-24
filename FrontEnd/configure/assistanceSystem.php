<?php
include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/Configure_Back/order.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemi di Assistenza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Sistemi di Assistenza</h1>
        <form id="assistenzaForm" method="POST">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="adaptiveSpeedAssist"
                        name="adaptiveSpeedAssist" value="Adaptive Speed Assist (ACC)">
                    <label class="custom-control-label" for="adaptiveSpeedAssist">Adaptive Speed Assist (ACC)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hillStartAssist" name="hillStartAssist"
                        value="Assistente alla partenza in salita">
                    <label class="custom-control-label" for="hillStartAssist">Assistente alla partenza in salita</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="descentAssist" name="descentAssist"
                        value="Descent Assist">
                    <label class="custom-control-label" for="descentAssist">Descent Assist</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="parkingAssistant" name="parkingAssistant"
                        value="Assistente al parcheggio">
                    <label class="custom-control-label" for="parkingAssistant">Assistente al parcheggio</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="parkingAssistantPlus"
                        name="parkingAssistantPlus" value="Sistema di ausilio al parcheggio plus">
                    <label class="custom-control-label" for="parkingAssistantPlus">Sistema di ausilio al parcheggio
                        plus</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="laneChangeWarning" name="laneChangeWarning"
                        value="Lane change warning">
                    <label class="custom-control-label" for="laneChangeWarning">Lane change warning</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="laneDepartureWarning"
                        name="laneDepartureWarning" value="Lane departure warning">
                    <label class="custom-control-label" for="laneDepartureWarning">Lane departure warning</label>
                </div>
            </div>
            <!-- Aggiungi altre checkbox per gli altri sistemi di assistenza -->
           <button type="submit" href="" class="btn btn-primary">Conferma</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>