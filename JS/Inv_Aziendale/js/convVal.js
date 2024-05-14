var exchangeRates = {
    EUR: { USD: 1.14, GBP: 0.85 },
    USD: { EUR: 0.88, GBP: 0.75 },
    GBP: { EUR: 1.18, USD: 1.33 }
  };
  
  // Funzione per impostare la valuta iniziale
  function setCurrency(currency) {
    localStorage.setItem('initialCurrency', currency);
  }
  
  // Funzione per impostare la valuta di destinazione
  function setTargetCurrency(currency) {
    localStorage.setItem('targetCurrency', currency);
  }
  
  // Funzione per la conversione di valuta
  function convertCurrency() {
    var amount = parseFloat(document.getElementById("amount").value);
    var initialCurrency = localStorage.getItem('initialCurrency');
    var targetCurrency = localStorage.getItem('targetCurrency');
    console.log(initialCurrency);
  
    // Verifica che l'importo sia valido e che le valute siano selezionate
    if (!isNaN(amount) && initialCurrency && targetCurrency) {
      var exchangeRate = exchangeRates[initialCurrency][targetCurrency];
      var result = amount * exchangeRate;
      document.getElementById("amountRes").value = result.toFixed(2);
    } else {
      alert("Please enter a valid amount and select currencies.");
    }
  }
  