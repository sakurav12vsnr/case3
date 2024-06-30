document.addEventListener('DOMContentLoaded', function () {
    const tabs =
        document.getElementsByClassName('tab');
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', tabSwitch, false);
    }

    function tabSwitch() {
        document.getElementsByClassNamae('is-active')[0].class
    }
})