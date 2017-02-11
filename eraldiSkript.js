function changeMyText() {
		document.getElementById("suvajutt").innerHTML = "Sa veel siin?";
}


function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	
	var praksil6pp = new Date();



	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('timertext').innerHTML =
		(16 - h) + ":" + (30 - m) + ":" + (59 - s);
	var t = setTimeout(startTime, 500);
}
function checkTime(i) {
	if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
}

