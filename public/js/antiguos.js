document.getElementById("BotonAntiguo").addEventListener("click", function() {
    var modal = document.getElementById("antiguo");
    modal.style.display = "block";
});
document.getElementById("antiguo").addEventListener("click", function(e) {
    if (e.target === this || e.target.id === "CerrarModal") {
        this.style.display = "none";
    }
});