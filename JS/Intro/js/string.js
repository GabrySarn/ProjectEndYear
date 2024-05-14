// Restituisce il carattere alla posizione specificata nella stringa
let stringa = "Ciao mondo!";
console.log(stringa.charAt(1)); 

// Restituisce il valore Unicode del carattere alla posizione specificata nella stringa
console.log(stringa.charCodeAt(0)); 

// Concatena due stringhe e restituisce una nuova stringa
let stringa2 = "Come stai?";
let nuovaStringa = stringa.concat(" ", stringa2);
console.log(nuovaStringa); 

// Verifica se una stringa termina con un'altra stringa specificata
console.log(stringa.endsWith("mondo!")); 

// Verifica se una stringa contiene la sottostringa specificata
console.log(stringa.includes("mondo"));

// Restituisce l'indice della prima occorrenza di una sottostringa specificata
console.log(stringa.indexOf("mondo"));

// Restituisce un array contenente tutte le occorrenze della stringa corrispondente a un'espressione regolare
let risultatoMatch = stringa.match(/o/g);
console.log(risultatoMatch);

// Restituisce una nuova stringa che consiste nella concatenazione di una stringa ripetuta un numero di volte specificato
console.log("Ciao ".repeat(3));

// Sostituisce la sottostringa corrispondente a un'espressione regolare con una nuova sottostringa
let nuovaStringa2 = stringa.replace("mondo", "universo");
console.log(nuovaStringa2);

// Estrae una porzione di stringa e restituisce una nuova stringa
let sottostringa = stringa.slice(5, 10);
console.log(sottostringa); 

// Divide una stringa in un array di sottostringhe basato su un delimitatore
let parole = stringa.split(" ");
console.log(parole); 

// Verifica se una stringa inizia con la sottostringa specificata
console.log(stringa.startsWith("Ciao"));

// Restituisce una sottostringa tra due indici specificati
console.log(stringa.substring(0, 4)); 

// Restituisce una nuova stringa con tutti i caratteri convertiti in minuscolo
console.log(stringa.toLowerCase());

// Restituisce una nuova stringa con tutti i caratteri convertiti in maiuscolo
console.log(stringa.toUpperCase()); 