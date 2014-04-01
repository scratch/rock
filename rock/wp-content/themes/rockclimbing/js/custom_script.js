function opendashboard() {

	var ldb=document.getElementById('leftdashboard');

	if (ldb.style.display == "none") {
		ldb.style.display="block";			
	}else{
			ldb.style.display="none";
					}
	return false;
	}

function openroutesmenu() {

	var hrm=document.getElementById('rchrm');

	if (hrm.style.display == "none") {
		hrm.style.display="block";			
	}else{
			hrm.style.display="none";
					}
	return false;
	}

function opencommentform() {
	var ocf=document.getElementById('commentform');

	if (ocf.style.display == "none") {
		ocf.style.display="block";			
	}else{
			ocf.style.display="none";
					}
	return false;
	}

function rimageoverlay() {			
						
	var ofade=document.getElementById('fade');
        var or=document.getElementById('routeimageoverlay');

	if (ofade.style.display == "none") {
		ofade.style.display="block";			
	}else{
			ofade.style.display="none";
					}

	if (or.style.display == "none") {
		or.style.display="block";
					}else{
			or.style.display="none";
					}
			return false;
		}

function aimageoverlay() {			
						
	var ofade=document.getElementById('fade');
	var od=document.getElementById('areaimageoverlay');

	if (ofade.style.display == "none") {
		ofade.style.display="block";			
	}else{
			ofade.style.display="none";
					}
		
	if (od.style.display == "none") {
		od.style.display="block";
					}else{
			od.style.display="none";
					}
			return false;
		}