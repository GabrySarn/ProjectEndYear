var exchangeRates = {
    EUR: { USD: 1.14, GBP: 0.85 },
    USD: { EUR: 0.88, GBP: 0.75 },
    GBP: { EUR: 1.18, USD: 1.33 }
  };
  
  function setCurrency(currency) {
    localStorage.setItem('initialCurrency', currency);
  }
  
  function setTargetCurrency(currency) {
    localStorage.setItem('targetCurrency', currency);
  }
  
  function convertCurrency() {
    var amount = parseFloat(document.getElementById("amount").value);
    var initialCurrency = localStorage.getItem('initialCurrency');
    var targetCurrency = localStorage.getItem('targetCurrency');
    console.log(initialCurrency);
  
    if (!isNaN(amount) && initialCurrency && targetCurrency) {
      var exchangeRate = exchangeRates[initialCurrency][targetCurrency];
      var result = amount * exchangeRate;
      document.getElementById("amountRes").value = result.toFixed(2);
    } else {
      alert("Please enter a valid amount and select currencies.");
    }
  }
  