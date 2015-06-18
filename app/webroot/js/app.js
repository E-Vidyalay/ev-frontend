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
$(".has-sub-menu-lit").mouseover(function(){
	$(this).children(".sub-menu-lit").show();
});
$(".has-sub-menu-lit").mouseout(function(){
	$(this).children(".sub-menu-lit").hide();
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
$(".right-submenu > li > a ").on('click',function(event){
	var baseUrl = location.origin;
	if ($(this).attr('id')!=null) { 
	var u=baseUrl+'/ev-frontend/links/get_video/'+$(this).attr('id');
    console.log(u);
    $.ajax({
    	url:u,
    	success:function(data){
    		$(".off-canvas-wrap").removeClass("move-left");
    		$("#video-file").html(data);
    	},
    	error:function(e){
    		alert("Sorry there was error :"+e);
    	}
    })};
});
$(".usr-img-preview").click(function(){
    	$("#imgInp").click();
});
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
        $("#removeDp").hide();
    });
$("#removeDp").on('click',function(event){
	var baseUrl = location.origin; 
	var u=baseUrl+'/ev-frontend/users/removeProfile_pic/';
    console.log(u);
    $.ajax({
    	url:u,
    	success:function(data){
    		$("#profilePic").html(data);
    	},
    	error:function(e){
    		alert("Sorry there was error :"+e);
    	}
    })
});
$(".lt-menu > li >a").click(function(){
    var u=baseUrl+'/Literatures/get_level_book/'+$(this).attr('id');
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#example").html(data);
        },
        error:function(e){
            alert("Sorry there was error :"+u);
        }
    })
});
$("#slit-list > li >a").click(function(){
    var u=baseUrl+'/Literatures/get_sublit_book/'+$(this).attr('id');
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#example").html(data);
        },
        error:function(e){
            alert("Sorry there was error :"+e);
        }
    })
});
$(".sub-menu-lit > li > a").click(function(){
    var u=baseUrl+'/Literatures/get_lit_book/'+$(this).attr('id');
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#example").html(data);
        },
        error:function(e){
            alert("Sorry there was error :"+u);
        }
    })
});
$(".vi > li >a").click(function(){
    var u=baseUrl+'/Links/get_subject/'+$(this).attr('id');
    console.log(u);
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $("#vi-cont").html(data);
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});

$(document).on('click','#subs >li >a',function(event){
    var u=baseUrl+'/Links/get_topics/'+$(this).attr('id');
    console.log(u);
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $("#vi-cont").html(data);
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
$(document).on('click','#subl-vi >li >a',function(event){
    var u=baseUrl+'/Links/get_links/'+$(this).attr('id');
    console.log(u);
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $("#vi-cont").html(data);
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
$(document).on('click','#videos >li >a',function(event){
    var u=baseUrl+'/Links/get_video/'+$(this).attr('id');
    console.log(u);
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $(".urls-embed").html(data);
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
