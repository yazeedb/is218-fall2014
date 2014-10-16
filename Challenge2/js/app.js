var schoolRecords = $('#schoolRecords');
var recordResult = $('#recordResult');

schoolRecords.children().on("click", function(e) {
	e.preventDefault();
	var url = $(this).attr('href');
	
	$.ajax({
		url: url,
		success: function(response) {
			recordResult.html($(response).find('table'));
		}
	});
});
