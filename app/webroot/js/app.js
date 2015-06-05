$(document).ready(function(){
	setTimeout(function(){
		$('.alert-box').fadeOut(800);
	},2000);
	$(".course-menu > ul >li:first-child").addClass("active");
	$(".accordion-navigation > div").removeClass("active");
	$(".accordion-navigation > div").first().addClass("active");
	$(".side-nav > li").first().addClass("li-active");
});
$(".course-menu > ul > li > a").mouseover(function(){
	var a=$(this).attr('data-target');
	$(".subject-menu").hide();
	$("#"+a).show()
});
$(".course-menu").mouseover(function(){
	$(".cs-dropdown").addClass("usr-active");
});
$(".course-menu").mouseout(function(){
	$(".cs-dropdown").removeClass("usr-active");
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

$(".accordion-navigation").on('click',function(){
	$(".accordion-navigation > div").removeClass("active");
		$(this).children("div").addClass("active");
});

$(".side-nav > li").on('click',function(event){
	$(".side-nav > li").removeClass("li-active");
	$(this).addClass("li-active");
	var baseUrl = location.origin;
    var u=baseUrl+'/ev-frontend/links/get_video/'+$(this).attr('id');
    console.log(u);
    $.ajax({
    	url:u,
    	success:function(data){
    		$("html,body").animate({scrollTop: 0},500);
    		$("#video-file").html(data);
    	},
    	error:function(e){
    		alert("Sorry there was error :"+e);
    	}
    })
});