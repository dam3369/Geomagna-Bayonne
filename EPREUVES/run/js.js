function clickOnSubmit(){
	$('#form').submit();
	timeOut();
}

function timeOut(){
	setTimeout("clickOnSubmit()",60000);
}

$('#form').submit(function(e){
	e.preventDefault();
	$.post("http://inscription.devoralive.com/EPREUVES/run/add_point.php", $('form').serializeArray());
})

setTimeout("timeOut()",10000);
