document.addEventListener("DOMContentLoaded", () => {
    const closePopup = document.getElementById("closePopup");

    if (closePopup) {
        closePopup.addEventListener("click", () => {
            document.querySelector(".popup-error").style.display = "none";
        });
    }
});
