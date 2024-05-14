function convertiUnita() {
    var valoreInput = parseFloat(document.getElementById("input").value);
    var unitaOrigine = document.getElementById("unitaOrigine").value;
    var unitaDestinazione = document.getElementById("unitaDestinazione").value;
    var risultatoParagrafo = document.getElementById("risultato");

    if (valoreInput === 0) {
        risultatoParagrafo.innerHTML = "";
        return;
    }

    if (unitaOrigine === unitaDestinazione) {
        risultatoParagrafo.innerHTML = "Le unità di origine e destinazione sono uguali. Il valore rimane invariato.";
        return;
    }

    var fattoriDiConversione = {
        metri: {
            piede: 3.28084,
            chilometri: 0.001,
            centimetro: 100,
            miglio: 0.000621371,
            Iarda: 1.09361,
            pollice: 39.3701
        },
        chilometri: {
            metri: 1000,
            piede: 3280.84,
            centimetro: 100000,
            miglio: 0.621371,
            Iarda: 1093.61,
            pollice: 39370.1
        },
        centimetro: {
            metri: 0.01,
            piede: 0.0328084,
            chilometri: 0.00001,
            miglio: 0.0000062137,
            Iarda: 0.0109361,
            pollice: 0.393701
        },
        miglio: {
            metri: 1609.34,
            piede: 5280,
            chilometri: 1.60934,
            centimetro: 160934,
            Iarda: 1760,
            pollice: 63360
        },
        Iarda: {
            metri: 0.9144,
            piede: 3,
            chilometri: 0.0009144,
            centimetro: 91.44,
            miglio: 0.000568182,
            pollice: 36
        },
        piede: {
            metri: 0.3048,
            chilometri: 0.0003048,
            centimetro: 30.48,
            miglio: 0.000189394,
            Iarda: 0.333333,
            pollice: 12
        },
        pollice: {
            metri: 0.0254,
            chilometri: 0.0000254,
            centimetro: 2.54,
            miglio: 0.0000157828,
            Iarda: 0.0277778,
            piede: 0.0833333
        },
       
    };

    var fattoreDiConversione = fattoriDiConversione[unitaOrigine][unitaDestinazione];
    var valoreConvertito = valoreInput * fattoreDiConversione;
    risultatoParagrafo.innerHTML = valoreConvertito.toFixed(2) + " " + unitaDestinazione + ".";
}
