$(window).on("scroll", function() {
  const height = $(window).height();
  const scroll = $(window).scrollTop();

  const leftTargets = $(".fadeFromLeft");
  leftTargets.each(function(){
    let target = $(this);
    let targetPosition = target.offset().top + 30;
    if(scroll >= targetPosition - height) {	
  	  target.addClass("fadeFromLeftAnime");
    } else if(scroll < targetPosition - height){
	    target.removeClass("fadeFromLeftAnime");
    }
  });

  const rightTargets = $(".fadeFromRight");
  rightTargets.each(function(){
    let target = $(this);
    let targetPosition = target.offset().top + 30;
    if(scroll >= targetPosition - height) {	
  	  target.addClass("fadeFromRightAnime");
    } else if(scroll < targetPosition - height){
	    target.removeClass("fadeFromRightAnime");
    }
  });

  const time = 0.3;
  let delay = time;
  const targetPosition = $(".scrollWrapper").offset().top;
  const children = $(".scrollWrapper").children();	
  if(scroll >= targetPosition - height) {	
    $(children).each(function(){
      if(!$(this).hasClass("fadeInOrderSlow")){
	$(this).css("animation-delay", delay + "s").addClass("fadeInOrderSlow");
        delay += time;
      }
    });
  } else if(scroll < targetPosition - height){
    $(children).removeAttr("style").removeClass("fadeInOrderSlow");
    delay = time;
  }
});