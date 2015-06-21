function isEmailAddress(str) {
   var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   return pattern.test(str);  // returns a boolean 
}
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
    $(this).children(".sub-menu-2").show();
	$(this).children("a").addClass('usr-active');
});
$(".has-sub-menu").mouseout(function(){
	$(this).children(".sub-menu").hide();
    $(this).children(".sub-menu-2").hide();
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
$("#level_menu > li >a").click(function(){
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
$("#lit_menu > li > a").click(function(){
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
    var u=baseUrl+'/VideoComments/index';
    var name=$("#VideoCommentGetVideoForm #VideoCommentName").val();
    var email=$("#VideoCommentGetVideoForm #VideoCommentEmail").val();
    var comment=$("#VideoCommentGetVideoForm #typingarea").val();
    if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Comment cannot be empty ");
    }
    else{
        $.ajax({
        type: "POST",
        url: u,
        data: form,

        success: function(data){
            $('.comments').append(data);
            console.log(data);
             $("#VideoCommentGetVideoForm")[0].reset();
        }

        });
    }
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });
$(document).on('click','.btn-rply',function(event){
    var id=($(this).attr('id'));
    var a=id.split('_');
    var fid=a[1];
    form = $("#replyForm_"+fid).serialize();
    var u=baseUrl+'/VideoReplies/index';
    var name=$('#name_'+fid).val();
    var email=$('#email_'+fid).val();
    var comment=$("#replyForm_"+fid+" #typingarea").val();
    var u=baseUrl+'/HobbylobbyReplies/index';
     if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Comment cannot be empty ");
    }
    else{
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('#replies_'+fid).append(data);
             $("#replyForm_"+fid)[0].reset();
             console.log(data);
       }

     });
    }
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
    var u=baseUrl+'/HobbylobbyComments/index';
    var name=$("#HobbylobbyCommentGetForm #HobbylobbyCommentName").val();
    var email=$("#HobbylobbyCommentGetForm #HobbylobbyCommentEmail").val();
    var comment=$("#HobbylobbyCommentGetForm #typingarea").val();
    if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Comment cannot be empty ");
    }
    else{
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('.comments').append(data);
             $("#HobbylobbyCommentGetForm")[0].reset();
       }

     });   
    }
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });

$(document).on('click','.btn-rply-comment',function(event){
    var id=($(this).attr('id'));
    var a=id.split('_');
    var fid=a[1];
    form = $("#replyForm_"+fid).serialize();
    var name=$('#name_'+fid).val();
    var email=$('#email_'+fid).val();
    var comment=$("#replyForm_"+fid+" #typingarea").val();
    var u=baseUrl+'/HobbylobbyReplies/index';
     if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Comment cannot be empty ");
    }
    else{
      $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('#replies_'+fid).append(data);
             $("#replyForm_"+fid)[0].reset();
             console.log(data);
       }

     });  
    }
     
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
//Literature post ajax 
$(document).on('click','.get-lit-post',function(event){
    var u=baseUrl+'/LiteraturePosts/get_post/'+$(this).attr('id');
    $('.loading').show();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $(".post-content").html(data);
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
$(document).on('click','#btn-lit-post',function(event){
    form = $("#VideoCommentGetVideoForm").serialize();
    var u=baseUrl+'/LiteratureComments/index';
    var name=$("#VideoCommentGetVideoForm #LiteratureCommentName").val();
    var email=$("#VideoCommentGetVideoForm #LiteratureCommentEmail").val();
    var comment=$("#VideoCommentGetVideoForm #typingarea").val();
    if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Comment cannot be empty ");
    }
    else{
       $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            console.log(data);
            $('.comments').append(data);
             $("#VideoCommentGetVideoForm")[0].reset();
       },
       error:function(data){
        console.log(data);
       }

     }); 
    }
     
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });
$(document).on('click','.btn-rply-lit',function(event){
    var id=($(this).attr('id'));
    var a=id.split('_');
    var fid=a[1];
    form = $("#replyForm_"+fid).serialize();
     var name=$('#name_'+fid).val();
    var email=$('#email_'+fid).val();
    var comment=$("#replyForm_"+fid+" #typingarea").val();
    var u=baseUrl+'/LiteratureReplies/index';
     if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Comment cannot be empty ");
    }
    else{
    
     $.ajax({
       type: "POST",
       url: u,
       data: form,

       success: function(data){
            $('#replies_'+fid).append(data);
             $("#replyForm_"+fid)[0].reset();
             console.log(data);
       }

     });
    }
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });
$(".sub-menu-lit > li > a").click(function(){
    var u=baseUrl+'/LiteraturePosts/get_lit_post/'+$(this).attr('id');
    $('.loading').show();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $(".post-content").html(data); 
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
$("#slit-list > li >a").click(function(){
    var u=baseUrl+'/LiteraturePosts/get_sublit_post/'+$(this).attr('id');
    $('.loading').show();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $(".post-content").html(data); 
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
$(".lt-menu > li >a").click(function(){
    var u=baseUrl+'/LiteraturePosts/get_level_post/'+$(this).attr('id');
    $('.loading').show();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $(".post-content").html(data); 
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    })
});
