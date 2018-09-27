var path = window.location.pathname;
var page = path.split("/").pop();
$('body').attr('contenteditable', false);
$.ajax({
	type: 'POST',
	url: 'http://beta.designforchange.us/dfcusa-web/update.php?page=' + page,
	data: document.documentElement.outerHTML,
	contentType: 'text/plain'
}).done(function() {
	alert('Saved');
location.reload();
});