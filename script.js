// Add event listeners to buttons
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".btn");
    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            console.log("Button clicked!");
        });
    });
});

// Add interactive feature functionality
const interactiveFeatures = document.querySelectorAll(".interactive-features .btn");
interactiveFeatures.forEach(function(feature) {
    feature.addEventListener("click", function() {
        // Launch interactive feature
        console.log("Interactive feature launched!");
    });
});