var menu_func_press = false;
let touchScreen;

//Detect device
detectKindDevice();

//Set menu on start
$(document).ready(function () {
  manageMenu();
});

//Browser's size listener
window.addEventListener("resize", function (event) {
  manageMenu();
});

//Menu and sticker mobile
function menu_func() {
  if ($(window).width() <= 768 && touchScreen) {
    if (!menu_func_press) {
      $(".cover_mobile").removeClass("script_sfondomenu_corto");
      $(".menu").removeClass("hide");
      $(".sticker_svg").removeClass("hide");
      menu_func_press = true;
    } else {
      $(".cover_mobile").addClass("script_sfondomenu_corto");
      $(".menu").addClass("hide");
      $(".sticker_svg").addClass("hide");
      menu_func_press = false;
    }
  }
}

//Multylenguage
$(document).ready(function () {
  const engContent = document.getElementsByClassName("english").length;
  const itaContent = document.getElementsByClassName("italiano").length;
  const engButton = document.getElementById("engbutton");
  const itaButton = document.getElementById("itabutton");
  var hasEnglish = false;
  var hasItaliano = false;

  if (engContent > 0) {
    hasEnglish = true;
  }
  if (itaContent > 0) {
    hasItaliano = true;
  }

  $("#itabutton").click(function () {
    $(".english").addClass("hide");
    $(".italiano").removeClass("hide");
    $("#itabutton").removeClass("buttondisabled");
    $("#itabutton").addClass("buttonenabled");
    $("#engbutton").addClass("buttondisabled");
    $("#engbutton").removeClass("buttonenabled");
  });
  $("#engbutton").click(function () {
    $(".english").removeClass("hide");
    $(".italiano").addClass("hide");
    $("#engbutton").removeClass("buttondisabled");
    $("#engbutton").addClass("buttonenabled");
    $("#itabutton").addClass("buttondisabled");
    $("#itabutton").removeClass("buttonenabled");
  });

  if (hasEnglish & hasItaliano) {
    multyLengSite();
  } else {
    if (hasEnglish) {
      if (engButton) {
        engButton.click();
      }
    } else {
      if (itaButton) {
        itaButton.click();
      }
    }
    $(".lengButton").addClass("hide");
  }

  function multyLengSite() {
    if (defaultLenguage == "english") {
      engButton.click();
    } else {
      itaButton.click();
    }
  }
});

//Support button
var press_supportFunc = 0;
function supportFunc() {
  if (press_supportFunc == 0) {
    $(".subSupport").removeClass("hide");
    press_supportFunc = 1;
  } else {
    $(".subSupport").addClass("hide");
    press_supportFunc = 0;
  }
}

//Multylenguage image size
//FUCTIONS
function detectKindDevice() {
  function is_touch_enabled() {
    return (
      "ontouchstart" in window ||
      navigator.maxTouchPoints > 0 ||
      navigator.msMaxTouchPoints > 0
    );
  }
  if (is_touch_enabled()) {
    touchScreen = true;
  } else {
    touchScreen = false;
  }
}
function manageMenu() {
  if ($(window).width() <= 768 && !touchScreen) {
    $(".span_2_of_10").addClass("hide");
    $(".sticker_svg").addClass("hide");
    $("#cornice").addClass("browser_as_mobile");
  } else if ($(window).width() <= 768 && touchScreen) {
    $(".cover_mobile").addClass("script_sfondomenu_corto");
    $(".menu").addClass("hide");
    $(".sticker_svg").addClass("hide");
    $(".logo a").addClass("disabled-link");
  } else if ($(window).width() >= 768) {
    $(".cover_mobile").removeClass("script_sfondomenu_corto");
    $(".menu").removeClass("hide");
    $(".sticker_svg").removeClass("hide");
    $(".span_2_of_10").removeClass("hide");
    $("#cornice").removeClass("browser_as_mobile");
  } else {
  }
}
