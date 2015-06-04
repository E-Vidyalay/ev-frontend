$(document).ready(function(){
	setTimeout(function(){
		$('.alert-box').fadeOut(800);
	},2000);
	$(".course-menu > ul >li:first-child").addClass("active");
});
$(".course-menu > ul > li > a").mouseover(function(){
	var a=$(this).attr('data-target');
	$(".subject-menu").hide();
	$("#"+a).show()
});
$(".cs-dropdown").mouseover(function(){
	
	$(".course-menu > ul > .active").children(".subject-menu").show();
	$(".course-menu > ul >").removeClass("active");
})
$(".has-sub-menu").mouseover(function(){
	$(this).children(".sub-menu").show();
	$(this).children("a").addClass('usr-active');
});
$(".has-sub-menu").mouseout(function(){
	$(this).children(".sub-menu").hide();
	$(this).children("a").removeClass('usr-active');
})
$(document).ready(function(){
	$(".accordion-navigation > div").removeClass("active");
$(".accordion-navigation").on('click',function(){
	$(".accordion-navigation > div").removeClass("active");
		$(this).children("div").addClass("active");
});	
});
