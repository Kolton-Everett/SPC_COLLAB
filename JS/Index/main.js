function CallDrop_Forum() {
  document.getElementById("forum_dropdown").classList.toggle("dropdown_show");
}

window.onclick = function(event){
  if (!event.target.matches(".sidebar-btn")){
    var dropdowns = document.getElementByClassName("ForumDropDown-Content");
    var i;
    for (i=0, i<dropdowns.length;i++){
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('dropdown_show')) {
        openDropdown.classList.remove('dropdown_show');
      }
    }
  }
}
