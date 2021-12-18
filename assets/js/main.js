jQuery.fn.center = function () {
  this.css("position", "absolute");
  this.css(
    "top",
    Math.max(
      0,
      ($(window).height() - $(this).outerHeight()) / 2 + $(window).scrollTop()
    ) + "px"
  );
  this.css(
    "left",
    Math.max(
      0,
      ($(window).width() - $(this).outerWidth()) / 2 + $(window).scrollLeft()
    ) + "px"
  );
  return this;
};

function showCaseImage() {
  var padding = parseInt($("body").css("padding-top")) * 2;
  $("#showCaseImage").height($(window).height() - padding);
}

function imagesWidth() {
  // get percentage of screen that everything but images makes up
  var colConstant = 0;
  $(".col").each(function (index, el) {
    colConstant = $(this).outerWidth() + colConstant;
  });
  var width = $("main").width() - colConstant;
  var imgmargin = $(".images").width() * 0.01;
  var newWidth = $(".images").width() + width;

  // make images the remainder
  if ($(window).width() > 678) {
    $(".images").addClass("desktop");
    $(".images").removeClass("mobile");
    $(".images").css("width", newWidth - 40);
  } else {
    $(".images").removeClass("desktop");
    $(".images").addClass("mobile");
  }
}

function newsContainer() {
  var colConstant =
    $("#newsContainer").outerWidth() + $(".fixed-width").outerWidth();
  var width = $(".section").outerWidth() - colConstant;
  var newWidth = $("#newsContainer").outerWidth() + width;

  if ($(window).width() > 678) {
    $("#newsContainer").css("width", newWidth);
    $(".images-news").removeClass("mobile");
    newsContainerImages();
  } else {
    $("#newsContainer").css("width", "100%");
    $(".images-news").addClass("mobile");
  }

  function newsContainerImages() {
    var colConstant = 0;
    var imagesWidthNew =
      $("#newsContainer").width() - $("#newsContainer .fixed-width").width();
    $(".images-news").width(imagesWidthNew - 26);
  }
}

$(document).ready(function () {
  $(window).trigger("resize");
  lightbox.option({
    resizeDuration: 0,
    wrapAround: true,
    disableScrolling: true,
    fadeDuration: 0,
    albumLabel: "",
  });

  $(".images").imagesLoaded(function () {
    imagesWidth();
    $(".images").css("opacity", "1");
  });

  $("#splashScreen").on("click", function (event) {
    window.location.hash = "home";
    event.preventDefault();
    $(this).fadeOut("200", function () {
      $(this).remove();
    });
    $("#splashtext").fadeOut("200", function () {
      $(this).remove();
    });
  });
  if (window.location.hash) {
    $("#splashScreen").hide(0);
    $("#splashScreen img").css("opacity", "0");
    $("#splashtext").hide(0);
  } else {
    $("#splashScreen").css("opacity", "1");
    $("#splashtext").css("opacity", "1");
    $("#splashScreen").imagesLoaded(function () {
      $("#splashScreen img").center();
      $("#splashScreen img").css("opacity", "1");
    });
  }
});

$(window).resize(function (event) {
  showCaseImage();
  imagesWidth();
  newsContainer();
  $("#splashScreen img").center();
});
