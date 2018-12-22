
//sticky menu
window.onscroll = function() {myFunction()};
			
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
	navbar.classList.add("menu-bar-sticky")
  } else {
	navbar.classList.remove("menu-bar-sticky");
  }
}