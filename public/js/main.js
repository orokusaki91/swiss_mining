/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-home', 'json/particles-home.json', function () {});

particlesJS.load('particles-roadmap', 'json/particles-roadmap.json', function () {});

particlesJS.load('particles-contact', 'json/particles-contact.json', function () {});

$(document).ready(function () {
	var height = $("footer").outerHeight();
	$("#app").css("margin-bottom", "-" + height + "px");
	$(".push-footer").css("height", height + "px");
});

$(document).ready(function () {
	setTimeout(function () {
		$("#loader").hide();
	}, 2000);
});

$(window).scroll(function () {
	if ($(window).scrollTop() >= 62) {
		$(".logo").css({
			'width': "80%"
		});
		$("#header").addClass("active");
	} else {
		$(".logo").css({
			'width': "60%"
		});
		$("#header").removeClass("active");
	}
});

window.onscroll = function () {
	myFunction()
};

function myFunction() {
	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById("myBar").style.width = scrolled + "%";
}

$(document).ready(function () {
	var owl = $("#home .owl-carousel");
	owl.owlCarousel({
		rewind: true,
		items: 1,
		nav: false,
		dots: false,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 5000
	});
});

$(document).ready(function () {
	var owl = $("#about-us .owl-carousel");
	owl.owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		margin: 15,
		lazyLoad: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 5000,
		responsive: {
			320: {
				items: 1,
				dots: false
			},
			768: {
				items: 3
			}
		}
	});
});

$(document).ready(function () {
	if ($("#back-to-top").length) {
		var scrollTrigger = 500, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$("#back-to-top").addClass("show");
				} else {
					$("#back-to-top").removeClass("show");
				}
			};
		backToTop();
		$(window).on("scroll", function () {
			backToTop();
		});
		$("#back-to-top").on("click", function (e) {
			e.preventDefault();
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
		});
	}
});

$(document).ready(function () {
	$(".hamburger").click(function () {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass("is-active");
			$("#mySidenav").removeClass("active");
			$("#mySidenav").addClass("no-active");
			$("#close-nav").removeClass("active");
			$("#close-nav").addClass("no-active");
			$("body").css("overflow", "auto");
		} else {
			$(this).addClass("is-active");
			$("#mySidenav").removeClass("no-active");
			$("#mySidenav").addClass("active");
			$("#close-nav").removeClass("no-active");
			$("#close-nav").addClass("active");
			$("body").css("overflow", "hidden");
		}
	});
	$("#close-nav").click(function () {
		$(this).removeClass("active");
		$(this).addClass("no-active");
		$(".hamburger").removeClass("is-active");
		$("#mySidenav").removeClass("active");
		$("#mySidenav").addClass("no-active");
		$("body").css("overflow", "auto");
	});
});

$('body').scrollspy({
	target: '#navbar'
});

$(document).ready(function () {
	$("#nav-bar .nav-link").click(function () {
		var href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, 1000);
	});
	$("#logo a").click(function () {
		var href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, 1000);
	});
});

$(document).ready(function () {
	$("#navbar .nav-link").click(function () {
		var href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, 1000);
		$("#mySidenav").removeClass("active");
		$(".hamburger").removeClass("is-active");
		$("#close-nav").removeClass("active");
		document.body.style.overflowY = "auto";
		$("#dropdown-about-us").collapse("hide");
		$("#dropdown-services").collapse("hide");
	});
});

function wow() {
	var windowWidth = $(window).width();
	if (windowWidth >= 768) {
		$(".wow").each(function () {
			var wowHeight = $(this).height();
			$(this).attr("data-wow-offset", wowHeight);
		});
	}
}

$(document).ready(function () {
	wow();
	$(window).resize(function () {
		wow();
	});
});

$(document).ready(function () {
	var scrollWidth = 150;
	$(".btn-left").click(function () {
		var scrollPosition = $("#roadmap").scrollLeft();
		var scroll = scrollPosition - scrollWidth;
		$("#roadmap").animate({
			scrollLeft: scroll
		}, 500);
		if (scrollPosition === 0) {
			$(".btn-left").prop("disabled", true);
		} else {
			$(".btn-right").prop("disabled", false);
		};
	});
	$(".btn-right").click(function () {
		$(".btn-left").prop("disabled", false);
		var scrollPosition = $("#roadmap").scrollLeft();
		var scroll = scrollPosition + scrollWidth;
		$("#roadmap").animate({
			scrollLeft: scroll
		}, 500);
		var widthScroll = $("#roadmap").width();
		if (scroll >= widthScroll) {
			$(".btn-right").prop("disabled", true);
		};
	});
});
