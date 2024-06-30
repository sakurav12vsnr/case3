document.addEventListener('DOMContentLoaded', function(){
  const tabs = document.getElementsByClassName('mypage-tab');
  for(let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }


  function tabSwitch(){

    document.getElementsByClassName('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
      
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('mypage-panel')[index].classList.add('is-show');
  };
}, false);