function validateForm() {
    var nome = document.getElementById("name").value;
    var cognome = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("phone").value;
    var data = document.getElementById("date").value;
    var ora = document.getElementById("time").value;
    var ospiti = document.getElementById("guests").value;

    if (nome === "" || cognome === "" || email === "" || telefono === "" || data === "" || ora === "" || ospiti === "") {
        alert("Tutti i campi devono essere compilati");
        return false;
    }

    // Validazione email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Inserisci un'email valida");
        return false;
    }

    // Validazione telefono
    var telefonoPattern = /^\d+$/;
    if (!telefonoPattern.test(telefono)) {
        alert("Inserisci un numero di telefono valido");
        return false;
    }

    // Validazione data
    var oggi = new Date();
    var data = new Date(data);
    if (data < oggi) {
        alert("La data deve essere di oggi o successiva a oggi");
        return false;
    }

    // Verifica che l'ora sia successiva all'ora attuale se la data è la stessa di oggi
    if (data.getDate() === oggi.getDate()) {
        var oraAttuale = oggi.getHours() * 60 + oggi.getMinutes();
        var ora = parseInt(ora.substring(0, 2)) * 60 + parseInt(ora.substring(3));
        if (ora <= oraAttuale) {
            alert("L'ora deve essere successiva all'ora attuale");
            return false;
        }
    }

    return true;
}
