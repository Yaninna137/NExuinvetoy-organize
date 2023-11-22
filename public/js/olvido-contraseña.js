document.getElementById("infoButton").addEventListener("click", function() {
    const infoContent = document.getElementById("infoContent");
    infoContent.style.display = infoContent.style.display === "block" ? "none" : "block";
});

const toggleButton = document.getElementById("toggleButton");
const sidebar = document.getElementById("sidebar");
let sidebarIsFixed = false;

sidebar.style.width = "0";

toggleButton.addEventListener("click", function() {
    if (sidebarIsFixed) {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "100%";
    }
    sidebarIsFixed = !sidebarIsFixed;
});

toggleButton.addEventListener("mouseenter", function() {
    if (sidebarIsFixed) {
        sidebar.style.width = "0";
        sidebarIsFixed = false;
    }
});