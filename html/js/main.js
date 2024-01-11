// Loader
$(document).ready(function () {
    $("body").addClass("loaded");
});

// Back to top
if ($("#back-to-top").length) {
    var scrollTrigger = 100, // px
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
        $("html,body").animate(
            {
                scrollTop: 0,
            },
            1000
        );
    });
}

// Sticky Navbar
$(window).scroll(function () {
    if ($(window).scrollTop() >= 200) {
        $(".mainHeader").addClass("sticky");
    } else {
        $(".mainHeader").removeClass("sticky");
    }
});

// Counter
$(".counter").each(function () {
    var $this = $(this),
        countTo = $this.attr("data-count");
    $({ countNum: $this.text() }).animate(
        {
            countNum: countTo,
        },
        {
            duration: 5000,
            easing: "linear",
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
                //alert('finished');
            },
        }
    );
});

// Brand Slider
$(".brandSlider").slick({
    arrows: false,
    dots: false,

    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 1000,

    slidesToShow: 7,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 7,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 5,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 320,
            settings: {
                slidesToShow: 2,
            },
        },
    ],
});

// Service Slider One
$(".serviceSliderOne").slick({
    arrows: false,
    dots: true,

    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 5000,

    slidesToShow: 4,
    slidesToScroll: 1,

    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});

// Blog Slider One
$(".blogSliderOne").slick({
    arrows: true,
    dots: false,

    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 5000,

    slidesToShow: 4,
    slidesToScroll: 1,

    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});

// Circle Progress
$(".circleProgress").each(function () {
    var $bar = $(this).find(".bar");
    var $val = $(this).find("span");
    var perc = parseInt($val.text(), 10);

    $({ p: 0 }).animate(
        { p: perc },
        {
            duration: 3000,
            easing: "swing",
            step: function (p) {
                $bar.css({
                    transform: "rotate(" + (45 + p * 1.8) + "deg)", // 100%=180Â° so: Â° = % * 1.8
                    // 45 is to add the needed rotation to have the green borders at the bottom
                });
                $val.text(p | 0);
            },
        }
    );
});
