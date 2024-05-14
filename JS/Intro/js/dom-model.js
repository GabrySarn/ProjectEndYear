var header = document.getElementById('header');
//header.innerText = "NO!"
header.innerHTML = '<h1>Ciao Mondo, ma grosso</h1>';

header.setAttribute('class','highlight');
header.removeAttribute('data-info');

const newElement = document.createElement('Paragrafo');
newElement.textContent = 'Nuovo elemento';

header.addEventListener('click',()=>{
    add(newElement);
    alert("Aggiunto Elemento!!!");
});

const newLink = document.createElement('button');
newLink.textContent = 'Clicca qui';
newLink.href = '#';
header.appendChild(newLink);

function add(newE){
    document.body.appendChild(newE);
}


