document.addEventListener('DOMContentLoaded', function () {
    const tabs =
        document.getElementsByClassName('tab');
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', tabSwitch, false);
    }

    function tabSwitch() {
        document.getElementsByClassName('is-active')[0].classList.remove('is-active');
        this.classList.add('is-active');

        document.getElementByClassName('is-show')[0].classList.remove('is-show')
    }
})