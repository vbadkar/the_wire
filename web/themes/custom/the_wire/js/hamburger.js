const hamburger = document.querySelector('#Layer_1');
const list = document.querySelector('.nav-bar');
// const icon = document.querySelector('.close');
hamburger.addEventListener('click', function(){
    list.classList.toggle('show');
    hamburger.classList.toggle('hide');
    // icon.classList.toggle('show');
});
