const hamburger = document.querySelector('#block-hamburgericon');
const closeButton = document.querySelector('#block-closebutton');
const list = document.querySelector('.nav-overlay');

hamburger.addEventListener('click', function(){
    list.classList.toggle('show');
    hamburger.classList.add('hide');
    hamburger.classList.remove('show');
    closeButton.classList.add('show');
    closeButton.classList.remove('hide');
});
closeButton.addEventListener('click', function(){
  list.classList.toggle('show');
  hamburger.classList.add('show');
  hamburger.classList.remove('hide');
  closeButton.classList.add('hide');
  closeButton.classList.remove('show');
});
