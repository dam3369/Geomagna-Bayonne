$(function() {
	$(".menu").tabs("div.panes > div.pane", {effect: 'fade', history: true});
});

$("div#inscription_btn").click(function(e){
	e.preventDefault();
	$("div#inscription_btn").toggle();
	$("div#inscription_form").toggle();
});
		
// adds an effect called "wall" to the validator
$.tools.validator.addEffect("wall", function(errors, event) {
	// get the message wall
	var wall = $(this.getConf().container).fadeIn();
	// remove all existing messages
	wall.find("div.msg").remove();
	// add new ones
	$.each(errors, function(index, error) {
		wall.append(
			"<p><strong>" +error.input.attr("name")+ "</strong> " +error.messages[0]+ "</p>"
		);		
	});
// the effect does nothing when all inputs are valid	
}, function(inputs)  {
	
});

// initialize validator with the new effect
$("#contact").submit(function(e){ 
    // prevent the form data being submitted to the server
     e.preventDefault();
      $.post('contact_submit.php', $("#contact").serializeArray(), function(data){
			  $('#error').html(data);
			});
});

$(".inscription_form").submit(function(e){ 
    // prevent the form data being submitted to the server
     e.preventDefault();
      $.post('inscription_submit.php', $(".inscription_form").serializeArray(), function(data){
			  $('#inscription_error').html(data);
			});
});
