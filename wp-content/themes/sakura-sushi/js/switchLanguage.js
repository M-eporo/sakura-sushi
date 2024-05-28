const jpBtn = $("#jp-btn");
const enBtn = $("#en-btn");
const jpElements = [
  ".global-nav", ".greeting-content", ".sub-heading", ".works-item .greeting-text", 
  ".works-text", ".heading.horizontal", ".sub-horizontal-heading", ".footer-list",".table-jp", ".page404-text-box",
  ".menu-list-container",
];
const enElements = [
  ".global-nav-en", ".greeting-content-en", ".sub-heading-en",
  ".works-text-en", ".heading-horizontal-en", ".sub-horizontal-heading-en",
  ".footer-list-en", ".table-en", ".page404-text-box-en",
  ".menu-list-container-en",
];
jpBtn.on("click", switchToJp);
enBtn.on("click", switchToEn);

function switchToJp(){
  $.each(jpElements, function(index, element) {
    $(element).fadeIn();
  });
  $.each(enElements, function(index, element){
    $(element).css("display", "none");
  });
  $(".btn.contact").text("ご予約はこちら");
  $(".company-info").removeClass("en");
  $(".works-item").removeClass("en-style");
  $(".logo-img").attr("src", "http://sakura-sushi.local/wp-content/themes/sakura-sushi/img/logo3.png");
}
function switchToEn(){
  $.each(jpElements, function(index, element){
    $(element).css("display", "none");
  });
  $.each(enElements, function(index, element){
    $(element).fadeIn();
  });
  $(".global-nav-en").fadeIn().css("display", "grid");
  $(".btn.contact").text("Reservation");
  $(".works-item").addClass("en-style");
  $(".company-info").addClass("en");
  $(".logo-img").attr("src", "http://sakura-sushi.local/wp-content/themes/sakura-sushi/img/logo1.png");
}
