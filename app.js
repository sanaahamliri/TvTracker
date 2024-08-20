
const menuBtn = document.querySelector('.menu-btn');
const navigation = document.querySelector('.navigation');

menuBtn.addEventListener('click', () => {
    navigation.classList.toggle('active');
    menuBtn.classList.toggle('active');
});


function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();

    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("messageError").textContent = "";

    let isValid = true;

    if (name === "") {
        document.getElementById("nameError").textContent = "Le champ 'Name' ne doit pas être vide.";
        isValid = false;
    }

    let emailPattern =/^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent = "Veuillez entrer une adresse email valide.";
        isValid = false;
    }

    if (message === "") {
        document.getElementById("messageError").textContent = "Le champ 'Message' ne doit pas être vide.";
        isValid = false;
    }

    if (!isValid) {
        return false;
    }

    alert("Formulaire soumis avec succès !");
    return true;
}


document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".slideshow img");
    let currentSlide = 0;

    function showNextSlide() {
        slides[currentSlide].classList.remove("active");
        
        currentSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.add("active");
    }

    slides[currentSlide].classList.add("active");

    setInterval(showNextSlide, 3000);
});
