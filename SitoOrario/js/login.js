var email = document.getElementById("email");
var password = document.getElementById("password");
var btnOk = document.getElementById("btnOk");

btnOk.addEventListener("click", accesso);

function acesso(){
    var Email = email.value;
    var pass = password.value;

    if(Email == "admin@mail.com" && pass == "admin"){
        localStorage.setItem("ctrl",true);
    }else{
        localStorage.setItem("ctrl",false);
    }
}