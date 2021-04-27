// Add & Remove 'active' class on the hamburger button
jQuery(".navbar-toggler").on("click", function () {
	if (jQuery(this).hasClass("is-active")) {
		$(this).removeClass("is-active");
	} else {
		$(this).addClass("is-active");
	}
});

// Accessibility feature to adjust font sizes, whenever either button is pressed the
// corresponding class will be added to the <main> tag, changing the size.
jQuery(function ($) {
	var container = $("#main");
	var small = $("#font-small");
	var normal = $("#font-normal");
	var large = $("#font-large");

	// Set classname on button click and store using cookies.
	small.click(function () {
		$(this).toggleClass("active");
		container.toggleClass("size-small");
		localStorage.ClassName = "size-small";
		// Remove classes from other buttons
		normal.removeClass("active");
		large.removeClass("active");
		container.removeClass("size-normal");
		container.removeClass("size-large");
	});
	normal.click(function () {
		$(this).toggleClass("active");
		container.toggleClass("size-normal");
		localStorage.ClassName = "size-normal";
		// Remove classes from other buttons
		small.removeClass("active");
		large.removeClass("active");
		container.removeClass("size-small");
		container.removeClass("size-large");
	});
	large.click(function () {
		$(this).toggleClass("active");
		container.toggleClass("size-large");
		localStorage.ClassName = "size-large";
		// Remove classes from other buttons
		small.removeClass("active");
		normal.removeClass("active");
		container.removeClass("size-normal");
		container.removeClass("size-small");
	});

	$(document).ready(function () {
		SetClass();
	});
	//before assigning class check local storage if it has any value
	function SetClass() {
		container.addClass(localStorage.ClassName);
	}
});

// Homepage Hero Slider (Slick)
jQuery(function ($) {
	$(document).ready(function () {
		$(".homepage-hero-wrapper").slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			customPaging: function (slider, i) {
				return '<div class="dot"></div>';
			}
		});
	});
});

jQuery(function ($) {
	$(document).ready(function () {
		$(".large-banner-slider").slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			customPaging: function (slider, i) {
				return '<div class="dot"></div>';
			}
		});
	});
});

// People we Support Slider (Slick)
jQuery(function ($) {
	$(document).ready(function () {
		$(".support-content").slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			appendDots: $(".dots-container"),
			customPaging: function (slider, i) {
				return '<div class="dot"></div>';
			}
		});
	});
});

// Make parent links clickable & dropdown open on hover
$(".navbar .dropdown > a").click(function () {
	if (!$(this).hasClass("parent-clicked")) {
		$(this).addClass("parent-clicked");
	} else {
		location.href = this.href;
	}
});

jQuery(function ($) {
	if (jQuery(".view-more").length) {
		jQuery(".view-more > a").on("click", function () {
			jQuery(this).parent().hide();

			jQuery(".testimonial-4, .testimonial-5, .testimonial-6")
				.show()
				.addClass("come-in");
			jQuery(".view-all").show();
		});
	}
});

// Smooth scroll to anchor tags
jQuery(function($) {
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
});