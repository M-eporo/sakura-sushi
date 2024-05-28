$(window).on("scroll", function() {
  const targets = $(".fadeIn");
  const height = $(window).height();
  const scroll = $(window).scrollTop();
  targets.each(function(){
    let target = $(this);
    let targetPosition = target.offset().top;
  
    if(scroll >= targetPosition - height) {	
  	  target.addClass("fadeInSlow");
    } else if(scroll < targetPosition - height){
	    target.removeClass("fadeInSlow");
    }
  });
});