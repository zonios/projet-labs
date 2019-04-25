<?php  ?>
<style>
  /* @import url("../wp-content/themes/projet-labs/css/flaticon.css"); */

 .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content i {
  color: black;
  font-size: 1.5rem;
  padding: 0.7rem 0.5rem 0.7rem;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content i:hover {background-color: #ddd; cursor: pointer;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;} 
</style>



<div style="padding: 0.5rem">Current icon: <span id="currentIcon" style="font-size:2.5rem;" class="<?= $labs_service_icon ?>"></span></div>

<input type="text" hidden id="labs_service_icon" name="labs_service_icon" value="<?= $labs_service_icon ?>">

<div class="dropdown">
  <div onclick="dropDown()" class="dropbtn button-primary">Choose an icon  ↓</div>
  <div id="iconsDropdown" class="dropdown-content">
    <i class="flaticon-023-flask"> flask</i>
    <i class="flaticon-011-compass"> compass</i>
    <i class="flaticon-037-idea"> idea</i>
    <i class="flaticon-039-vector"> vector</i>
    <i class="flaticon-036-brainstorming">brainstorming</i>
    <i class="flaticon-026-search"> search</i>
    <i class="flaticon-018-laptop-1"> laptop</i>
    <i class="flaticon-043-sketch"> sketch</i>
    <i class="flaticon-012-cube"> cube</i>
  </div>
</div> 



<script>

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropDown() {
  document.getElementById("iconsDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function chooseIcon (){
  var iconClass = event.currentTarget.className;
  document.getElementById('currentIcon').className = iconClass;
  document.getElementById('labs_service_icon').setAttribute("value", iconClass) ;
}

var icons = document.querySelectorAll("#iconsDropdown>i");
icons.forEach(elem => {
  elem.addEventListener("click",chooseIcon);
});

</script>