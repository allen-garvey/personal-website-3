/*
 * Functions for image comparison slider functionality on homepage
 */
(function(){
	divisor = document.getElementById("divisor");
	slider = document.getElementById("slider");
	function moveDivisor() {
		divisor.style.width = slider.value+"%";
	}
	slider.oninput = moveDivisor;
	//initialize slider to 50%
	moveDivisor();    
})();