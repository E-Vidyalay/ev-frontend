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
$(document).on('click','.topic_fetch',function(event){
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
$(document).on('click','.sub_topic_fetch',function(event){
    var u=baseUrl+'/Links/get_sub_topics/'+$(this).attr('id');
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
$(document).on('click','.no-sb',function(event){
    var u=baseUrl+'/Links/get_no_sub/'+$(this).attr('id');
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
    });
});
$(document).on('click','.watch_v',function(event){
    var u=baseUrl+'/Links/view_video/'+$(this).attr('id');
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
    });
})
$(document).on('click','.cmt-toggle',function(event){
    $("#cmt-bx").slideToggle("slow");

    if ($("#cmt-bx").is(':visible')) {
     $("html, body").animate({scrollTop: $("#cmt-bx").offset().top});
    }
});
$(document).on('click','.reply-toggle',function(event){
    var id=$(this).attr('id');
    $("#rep-"+id).slideToggle("slow");

    if ($("#rep-"+id).is(':visible')) {
     $("html, body").animate({scrollTop: $("#rep-"+id).offset().top});
    }
});
$(document).on('click','#btn',function(event){
    form = $("#VideoCommentGetVideoForm").serialize();
    var hdata="<div class='cmnt'>"+$('#VideoCommentGetVideoForm #typingarea').val()+"<br/><b>"+$('#VideoCommentName').val()+"</b>, "+$('#VideoCommentEmail').val()+"<span class='right'>"+Date()+"</span></div> ";
    var u=baseUrl+'/VideoComments/index';
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('.comments').append(hdata);
            console.log(hdata);
             $("#VideoCommentGetVideoForm")[0].reset();
       }

     });
console.log(u);
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });
$(document).on('click','.btn-rply',function(event){
    var id=($(this).attr('id'));
    var a=id.split('_');
    var fid=a[1];
    form = $("#replyForm_"+fid).serialize();
    var frmid="#replyForm_"+fid;
    var name="#name_"+fid;
    var hdata="<div class='res'>Reply from - <b>"+$(frmid+' '+name).val()+"</b>, "+$('#email_'+fid).val()+"<br/> "+$(frmid+' #typingarea').val()+"<span class='right'>"+Date()+"</span></div> ";
    var u=baseUrl+'/VideoReplies/index';
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('#replies_'+fid).append(hdata);
             $("#replyForm_"+fid)[0].reset();
             console.log(data);
       }

     });
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });

//Hobby lobby all ajax function
$(".hl > li >a").click(function(){
    var u=baseUrl+'/HobbylobbyPosts/get_hobby/'+$(this).attr('id');
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

$(document).on('click','#hobs >li >a',function(event){
    var u=baseUrl+'/HobbylobbyPosts/get_sub_hobby/'+$(this).attr('id');
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


$(document).on('click','#subl-subhb >li >a',function(event){
    var u=baseUrl+'/HobbylobbyPosts/get_posts/'+$(this).attr('id');
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

$(document).on('click','#posts >li >a',function(event){
    var u=baseUrl+'/HobbylobbyPosts/get_post/'+$(this).attr('id');
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
$(document).on('click','.watch_p',function(event){
    var u=baseUrl+'/HobbylobbyPosts/view_post/'+$(this).attr('id');
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
    });
})
$(document).on('click','#btn1',function(event){
    form = $("#HobbylobbyCommentGetForm").serialize();
    var hdata="<div class='cmnt'>"+$('#HobbylobbyCommentGetForm #typingarea').val()+"<br/><b>"+$('#HobbylobbyCommentName').val()+"</b>, "+$('#HobbylobbyCommentEmail').val()+"<span class='right'>"+Date()+"</span></div> ";
    var u=baseUrl+'/HobbylobbyComments/index';
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('.comments').append(hdata);
            console.log(hdata);
             $("#HobbylobbyCommentGetForm")[0].reset();
       }

     });
console.log(u);
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });

$(document).on('click','.btn-rply-comment',function(event){
    var id=($(this).attr('id'));
    var a=id.split('_');
    var fid=a[1];
    form = $("#replyForm_"+fid).serialize();
    var frmid="#replyForm_"+fid;
    var name="#name_"+fid;
    var hdata="<div class='res'>Reply from - <b>"+$(frmid+' '+name).val()+"</b>, "+$('#email_'+fid).val()+"<br/> "+$(frmid+' #typingarea').val()+"<span class='right'>"+Date()+"</span></div> ";
    var u=baseUrl+'/HobbylobbyReplies/index';
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('#replies_'+fid).append(hdata);
             $("#replyForm_"+fid)[0].reset();
             console.log(data);
       }

     });
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });
$(document).on('click','.hobby_fetch',function(event){
    var u=baseUrl+'/HobbylobbyPosts/get_sub_hobby/'+$(this).attr('id');
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