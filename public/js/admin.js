$(document).ready(function () {
	$(".btn-vertical-menu").click(function () {
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
			$("#vertical-menu").removeClass("active");
			$("#vertical-menu").addClass("no-active");
			$("#close-nav").removeClass("active");
			$("#close-nav").addClass("no-active");
			$("body").css("overflow", "auto");
		} else {
			$(this).addClass("active");
			$("#vertical-menu").removeClass("no-active");
			$("#vertical-menu").addClass("active");
			$("#close-nav").removeClass("no-active");
			$("#close-nav").addClass("active");
			$("body").css("overflow", "hidden");
		}
	});
	$("#close-nav").click(function () {
		$(this).removeClass("active");
		$(this).addClass("no-active");
		$(".btn-vertical-menu").removeClass("active");
		$("#vertical-menu").removeClass("active");
		$("#vertical-menu").addClass("no-active");
		$("body").css("overflow", "auto");
	});
});