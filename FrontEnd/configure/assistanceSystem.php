<?php
include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/Configure_Back/order.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistance Systems</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 {
            font-size: 2.5rem;
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }
        .custom-control-label {
            font-size: 1.2rem;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1.2rem;
            padding: 10px 20px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Assistance Systems</h1>
        <form id="assistanceForm" method="POST" >
        <input type="hidden" name="assistance" value="1">

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="adaptiveSpeedAssist"
                        name="adaptiveSpeedAssist" value="Adaptive Speed Assist (ACC)">
                    <label class="custom-control-label" for="adaptiveSpeedAssist">Adaptive Speed Assist (ACC) +149.99€</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hillStartAssist" name="hillStartAssist"
                        value="Hill Start Assist">
                    <label class="custom-control-label" for="hillStartAssist">Hill Start Assist+149.99€</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="descentAssist" name="descentAssist"
                        value="Descent Assist">
                    <label class="custom-control-label" for="descentAssist">Descent Assist +149.99€</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="parkingAssistant" name="parkingAssistant"
                        value="Parking Assistant">
                    <label class="custom-control-label" for="parkingAssistant">Parking Assistant +149.99€</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="parkingAssistantPlus"
                        name="parkingAssistantPlus" value="Parking Assistance Plus">
                    <label class="custom-control-label" for="parkingAssistantPlus">Parking Assistance Plus +149.99€</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="laneChangeWarning" name="laneChangeWarning"
                        value="Lane Change Warning">
                    <label class="custom-control-label" for="laneChangeWarning">Lane Change Warning +149.99€</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="laneDepartureWarning"
                        name="laneDepartureWarning" value="Lane Departure Warning">
                    <label class="custom-control-label" for="laneDepartureWarning">Lane Departure Warning +149.99€</label>
                </div>
            </div>
            <!-- Add more checkboxes for other assistance systems -->
            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>