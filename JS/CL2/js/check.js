function validateForm() {
    if (validateEmail() && validatePassword() ) {
        return true;
    } else {
        return false;
    }
}

function validatePassword() {
    var password = document.getElementById("password").value;
    var passwordWarning = document.getElementById("passwordWarning");

    if (password.length > 0) {

        var hasUpperCase = /[A-Z]/.test(password);
        var hasLowerCase = /[a-z]/.test(password);
        var hasNumbers = /\d/.test(password);
        var hasSpecialChars = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        var isLongEnough = password.length >= 6;

        if (hasUpperCase && hasLowerCase && hasNumbers && hasSpecialChars && isLongEnough) {
            passwordWarning.style.display = "none";
            return true;
        } else {
            passwordWarning.style.display = "inline";
            return false;
        }
    } else {
        passwordWarning.style.display = "inline";
        return false;
    }
}

function validateEmail() {
    var email = document.getElementById("email").value;
    var emailWarning = document.getElementById("emailWarning");

    if (email.length > 0) {
        var atIndex = email.indexOf('@');
        if (atIndex === -1 || atIndex === 0 || atIndex === email.length - 1) {
            emailWarning.style.display = "inline";
            return false; 
        }
        
        var parts = email.split('@');
        var localPart = parts[0];
        var domainPart = parts[1];

        var dotIndex = domainPart.indexOf('.');
        if (dotIndex === -1 || dotIndex === 0 || dotIndex === domainPart.length - 1) {
            emailWarning.style.display = "inline";
            return false; 
        }

        var domainAfterDot = domainPart.substring(dotIndex + 1);
        if (domainAfterDot.length < 2) {
            emailWarning.style.display = "inline";
            return false; 
        }

        emailWarning.style.display = "none";
        
        return true;
    } else {
        emailWarning.style.display = "inline";
        return false; 
    }
}
