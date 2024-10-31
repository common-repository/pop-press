function tabs(el){
		document.getElementById('signUp').classList.remove('active');
		document.getElementById('notifications').classList.remove('active');
		var id = el.getAttribute('href').substr(1);
		document.getElementById(id).className+=' active'
	}
	
