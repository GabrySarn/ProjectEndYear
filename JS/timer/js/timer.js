const myButton = document.getElementById('myButton');
const timer = document.getElementById('timer');
let timerInterval;
let sec = 0;

myButton.addEventListener('click', () => {
    if (!timerInterval) {
        sec = 0;
        timerInterval = setInterval(updateTimer, 1000);
    }
});

function updateTimer() {
    sec++;
    const h = Math.floor(sec / 3600);
    const m = Math.floor((sec % 3600) / 60);
    const remainingsec = sec % 60;
    const formattedTime = 
    (h < 10 ? '0' + h : h) + ':' +
    (m < 10 ? '0' + m : m) + ':' +
    (remainingsec < 10 ? '0' + remainingsec : remainingsec); 
    timer.textContent = formattedTime;
}

function stopTimer() {
    clearInterval(timerInterval);
    timerInterval = null;
}