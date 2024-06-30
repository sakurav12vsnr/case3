window.addEventListener('load', function () {

    const fileSelect = document.getElementById("profile-fileSelect");
    const fileElem = document.getElementById("profile-fileElem");

    fileSelect.addEventListener("click", (e) => {
        if (fileElem) {
            fileElem.click();
        }
    }, false);

});