
let schermo = document.getElementById("schermo");

const wipe = () => {
    schermo.value = '';
}

const set = (n) => {
    schermo.value += n;
}

const ris = () => {
    schermo.value = eval(schermo.value);
}