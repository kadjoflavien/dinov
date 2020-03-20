const menuToggle = document.querySelector('#menu-toggle');
const activeElements = document.querySelectorAll('.active-element');
const toggledMenu = menuToggle.addEventListener('click', function() {
	// forEach is not supported in IE11
	 activeElements.forEach(function(e){
	    e.classList.toggle("active");
 });
	for (const activated = 0; activated < activeElements.length; activated++) {
		activeElements[activated].classList.toggle('active');
	}
});
