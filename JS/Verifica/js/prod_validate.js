function validateProd(event) {
    var form = document.getElementById('productForm');
    var name = form.elements['name'].value;
    var quantity = form.elements['quantity'].value;
    var amount = form.elements['amount'].value;

    if (name.trim() === '' || isNaN(quantity) || isNaN(parseFloat(amount)) || name === "" || quantity === "" || amount === "") {
        alert('Inserisci i dati correttamente!');
        event.preventDefault();
        return false;
    }
    form.submit();
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('productForm').addEventListener('submit', function (event) {
        validateProd(event);
    });
});