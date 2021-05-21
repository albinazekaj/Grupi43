// Pjesa -Log In-
var modal = document.getElementById('id01');

// Kur perdoruesi klikon diku jashte modulit, ai mbyllet
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Pjesa -Sign Up-

var mod = document.getElementById('id');

// Kur perdoruesi klikon diku jashte modulit, ai mbyllet
window.onclick = function(event) {
  if (event.target == mod) {
        mod.style.display = "none";
  }
}

// Pjesa -READ-

var button = document.getElementsByClassName("button button1");
				var i;

for (i = 0; i < button.length; i++) {
  	button[i].addEventListener("click", function() {
    	this.classList.toggle("active");
    	var panel = this.nextElementSibling;
  			if (panel.style.display === "block") {
   				panel.style.display = "none";
   			} else {
    			panel.style.display = "block";
  				}
  			});
}

// Pjesa slideshow

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < slides.length; i++) {
    slides[i].className = slides[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  slides[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

// Pjesa e Guidance
var mybutton = document.getElementById("myBtn");

// Kur klikon ne butonin guidance, shkon tek sherbimet e faqes
function guideFunction() {
  document.body.scrollTop = 1500;
  document.documentElement.scrollTop = 1500;
}

