$(document).on("ready", inicio);

function inicio(){
	$("#counter").countdown({
		timestamp :(new Date(2013,08,01))
	});
}