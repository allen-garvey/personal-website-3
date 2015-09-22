/*
 * Text for email in footer
 */

(function(){
    var email = function(){
		var at = '@';
		var last = 'garvey';
		var first = 'allen';
		var tld = '.com';
		var garbage = 'some stuff to confuse spiders';
		return first + at + first + last + tld;
	}

	email_link = function(){
		return "<a href='mailto:" + email() + "'>" + email() + "</a>";
	}

	document.getElementById('footer').innerHTML = 'Questions, comments, job offers? Contact ' + email_link();

})();