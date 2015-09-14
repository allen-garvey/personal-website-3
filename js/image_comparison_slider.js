/*
 * Functions for image comparison slider functionality on homepage
 */
(function(){
	var slider = document.getElementById("slider");
	if(slider){
		var divisor = document.getElementById("divisor");
		var moveDivisor = function() {
			divisor.style.width = slider.value+"%";
		}
		slider.oninput = moveDivisor;
		//initialize slider to 50%
		moveDivisor(); 
	}
	   
})();