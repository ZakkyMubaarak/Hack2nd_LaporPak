window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-gradient-blue"); // Terapkan latar belakang gradien
    } else {
        navbar.classList.remove("bg-gradient-blue");
        navbar.classList.add("bg-transparent");
    }
});
