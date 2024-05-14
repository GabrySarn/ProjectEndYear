var elementBtnMessage = document.getElementById("btn-message");
var elementMessage = document.getElementById("message");
var elementFirstName = document.getElementById("first-name");


elementBtnMessage.addEventListener("click", greeting);

function greeting(){
    var firstName = elementFirstName.value;
    localStorage.setItem("firstName",firstName);

    firstName = localStorage.getItem("firstname")
    elementMessage.innerHTML = "<h1>" + firstName + "Ciao!</h1>";
}






