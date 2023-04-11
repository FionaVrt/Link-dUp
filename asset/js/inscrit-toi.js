function checkUserLoggedIn() {
    const user = document.querySelector(".user");
    if (user) {
        return true;
    } else {
        return false;
    }
}

function addBlurEffect() {
    document.body.classList.add("blur-effect");
}

function showPopup() {
    const popup = window.confirm("Inscrivez-vous ou connectez-vous pour continuer");
    if (popup) {
        window.location.href = "login.php";
    } else {
        window.location.href = "singup.php";
    }
}

window.addEventListener("scroll", function () {
    if (!checkUserLoggedIn()) {
        addBlurEffect();
        showPopup();
    }
}); 

window.addEventListener("click", function (event) {
    if (event.target.tagName.toLowerCase() === "button") {
        removeBlurEffect();
    }
});



