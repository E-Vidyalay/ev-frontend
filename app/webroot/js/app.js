$(document).ready(function(){
	setTimeout(function(){
		$('.alert-box').fadeOut(800);
	},2000);
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
});
$(".has-sub-menu").mouseout(function(){
	$(this).children(".sub-menu").hide();
})