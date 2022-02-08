var acc = document.querySelector(".categories");
var navBar = document.querySelector(".nav-bar");
acc.addEventListener("click", function() {
    navBar.classList.toggle("active");
    if (navBar.style.maxHeight) {
      navBar.style.maxHeight = null;
    } else {
      navBar.style.maxHeight = navBar.scrollHeight + "vh";
    }
  });
