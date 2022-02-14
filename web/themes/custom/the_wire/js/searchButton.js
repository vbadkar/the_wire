
const search = document.querySelector('#block-search');
const menu = document.querySelector('#block-the-wire-main-menu')
const searchBar = document.querySelector('#block-the-wire-search');

search.addEventListener('click', function(){
  menu.classList.toggle('hide');
  searchBar.classList.toggle('show');
  document.getElementById("edit-keys").autofocus = "True";

});
