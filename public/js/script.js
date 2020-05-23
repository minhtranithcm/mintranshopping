$(function(){
	// var checkScrollBars = function(){
	// 	alert('ok');
	// 	var b = $('body');
	// 	var normalw = 0;
	// 	var scrollw = 0;
		
	// 	normalw = window.innerWidth;
	// 	scrollw = normalw - b.width();
	// 	console.log('log:', scrollw);
	// 	$('#wrapper').css({marginRight:'-'+ scrollw +'px'});
		
	// }

	// checkScrollBars();

	$(document).ready(function() {
		$('#example').DataTable();
	} );
})