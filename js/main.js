$(document).ready(function() {
	$('#list').click(function(event){
		event.preventDefault();
		$('#grid').removeClass('activeView');
		$(this).addClass('activeView');
		$('#sprints .item').addClass('list-group-item');
	});
	$('#grid').click(function(event){
		event.preventDefault();
		$('#list').removeClass('activeView');
		$(this).addClass('activeView');
		$('#sprints .item').removeClass('list-group-item');
		$('#products .item').addClass('grid-group-item');
	});
});