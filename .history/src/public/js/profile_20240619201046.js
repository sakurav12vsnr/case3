window.addEventListener('load', function () {

    const fileSelect = document.getElementById("fileSelect");
    const fileElem = document.getElementById("fileElem");

    fileSelect.addEventListener("click", (e) => {
        if (fileElem) {
            fileElem.click();
        }
    }, false);

});

$('#fileElem').on('change', function (ev) {

        const reader = new FileReader();

        const fileName = ev.target.files[0].name;

        reader.onload = function (ev) {
            $('#icon_img_prv').attr('src', ev.target.result).css('width', '150px').css('height', '150px');
        }
        reader.readAsDataURL(this.files[0]);
    })