const symbols = ['⚽️', '🎱', '🏀', '🏈', '⚾️', '🥎', '🎾', '🏐', '🏉'];

function spin() {
  const slots = document.querySelectorAll('.slot');
  const spinDuration = 3000; // Durata dello spin in millisecondi (3 secondi)
  const frames = 30; // Numero di fotogrammi dell'animazione
  const symbolChangeInterval = spinDuration / frames; // Intervallo di tempo tra ogni cambio di simbolo
  let score = 0;

  let spins = 0;

  const spinInterval = setInterval(() => {
    // Assegna un simbolo casuale a ciascun rullo
    slots.forEach(slot => {
      const randomIndex = Math.floor(Math.random() * symbols.length);
      slot.textContent = symbols[randomIndex];
    });

    spins++;

    if (spins >= frames) {
      clearInterval(spinInterval);
    }
  }, symbolChangeInterval);
  updateScore();
}

function updateScore() {
    score += 10; // Aggiorna il punteggio
    scoreElement.textContent = score;
  }