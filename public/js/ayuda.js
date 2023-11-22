function toggleHelp(helpId) {
    var helpContent = document.getElementById(helpId);
    if (helpContent.style.display === "none" || helpContent.style.display === "") {
        helpContent.style.display = "block";
    } else {
        helpContent.style.display = "none";
    }
}
