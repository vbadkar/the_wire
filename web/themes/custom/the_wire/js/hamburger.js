const hamburger = document.querySelector('#Layer_1');
const list = document.querySelector('.nav-bar');
hamburger.classList.add('show');
hamburger.addEventListener('click', function(){
    list.classList.toggle('show');
    hamburger.classList.remove('show');
    hamburger.classList.toggle('hide');
});
