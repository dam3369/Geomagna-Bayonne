<?php require $_SERVER['DOCUMENT_ROOT'].'/lmp/lock.php'; ?>
<script type="text/javascript" language="Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
<script type="text/javascript" language="Javascript" src="http://inscription.devoralive.com/EPREUVES/run/js.js"></script>
<script type="text/javascript" language="Javascript">
$('form').submit(function(e){
	e.preventDefault();
	$.post('http://<?php echo $_SERVER['HTTP_HOST']; ?>/EPREUVES/run/add_point.php', $('form').serializeArray());
})
</script>