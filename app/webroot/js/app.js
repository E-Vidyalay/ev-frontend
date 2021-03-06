function isEmailAddress(str) {
   var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   return pattern.test(str);  // returns a boolean
}
$(document).ready(function(){
	setTimeout(function(){
		$('.alert-box').fadeOut(800);
	},2000);
    $(".vis li").first().addClass('active');
	$(".course-menu > ul >li:first-child").addClass("active");
	$(".accordion-navigation > div").removeClass("active");
	$(".accordion-navigation > div").first().addClass("active");
	$(".side-nav > li").first().addClass("li-active");
    $('.english').hide();
    //$(".vis li").first().addClass("active");
});
$("#standard").on('change',function(event){
        var u=baseUrl+"/Students/get_topic/"+$(this).val();
        console.log(u);
        console.log($('.loading'));
        $('.loading').show();
        $.ajax({
            url:u,
            success:function(data){
                $("#sb_topic").html(data);
                $('.loading').hide();
            },
            error:function(e){
                alert("Sorry there was error");
                $('.loading').hide();
            }
        })
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
$(".has-sub-menu-login").mouseover(function(){
    $(this).children(".sub-menu-log").show();
});
$(".has-sub-menu-login").mouseout(function(){
    $(this).children(".sub-menu-log").hide();
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
$("#topics").on('change',function(event){
    var u=baseUrl+"/Links/get_sub_topic/"+$(this).val();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#sub-div-id").html(data);
        },
        error:function(e){
            alert("Sorry there was error"+u);
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
        	if(window.File && window.FileReader && window.FileList && window.Blob){
	            var reader = new FileReader();
	
	            reader.onload = function (e) {
	                $('#blah').attr('src', e.target.result);
	            }
	
	            reader.readAsDataURL(input.files[0]);
            }
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
        $("#removeDp").hide();
    });
$("#removeDp").on('click',function(event){
	var baseUrl = location.origin;
	var u=baseUrl+'/Users/removeProfile_pic/';
    console.log(u);
    $.ajax({
    	url:u,
    	success:function(data){
    		$("#profilePic").html(data);
    	},
    	error:function(e){
    		alert("Sorry there was error :"+baseUrl);
    	}
    })
});
$(document).on('click','#videos >li >a',function(event){
    var u=baseUrl+'/Links/get_video/'+$(this).attr('id');
    console.log(u);
    $('.loading').show();
    $(".vis li").removeClass('active');
    $(this).parent().addClass('active');
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
     if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Reply cannot be empty ");
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
             console.log(u, fid);
       }

     });
    }
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });

//Hobby lobby all ajax function

$(document).on('click','#posts >li >a',function(event){
    var u=baseUrl+'/HobbylobbyPosts/get_post/'+$(this).attr('id');
    console.log(u);
    $('.loading').show();
    $(".vis li").removeClass('active');
    $(this).parent().addClass('active');
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
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Reply cannot be empty ");
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
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Reply cannot be empty ");
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

//for information comments
$(document).on('click','#btn2',function(event){
    form = $("#InformationCommentGetForm").serialize();
    var u=baseUrl+'/InformationComments/index';
    var name=$("#InformationCommentGetForm #InformationCommentName").val();
    var email=$("#InformationCommentGetForm #InformationCommentEmail").val();
    var comment=$("#InformationCommentGetForm #typingarea").val();
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
             $("#InformationCommentGetForm")[0].reset();
       }

     });
    }
     event.preventDefault();
     return false;  //stop the actual form post !important!

  });
//for information replies
$(document).on('click','.btn-rply-comment',function(event){
    var id=($(this).attr('id'));
    var a=id.split('_');
    var fid=a[1];
    form = $("#replyForm_"+fid).serialize();
    var name=$('#name_'+fid).val();
    var email=$('#email_'+fid).val();
    var comment=$("#replyForm_"+fid+" #typingarea").val();
    var u=baseUrl+'/InformationReplies/index';
     if(name=="" || typeof name==='undefined' || name==null || email=="" || typeof email==='undefined' || email==null || !isEmailAddress(email) || comment=="" || typeof comment==='undefined' || comment==null){
        alert("Sorry there was error while submitting your form ! bellow is the list of possible error, please check it\n * Name field should not be empty \n * Email address should not be empty and a valid email address \n * Reply cannot be empty ");
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

//code for latest video view in home latest
$(document).on('click','.link_video',function(event){
    var id=$(this).attr('id');
    var u=baseUrl+'/Pages/watch_video/'+$(this).attr('id');
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $("#watch_video").html(data);
            $("#watch_video").slideDown();
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    });
})
$(document).on('click','.link_post',function(event){
    var id=$(this).attr('id');
    var u=baseUrl+'/Pages/watch_post/'+$(this).attr('id');
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $("#watch_post").html(data);
            $("#watch_post").slideDown();
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    });
})
$(document).on('click','.link_lekh',function(event){
    var id=$(this).attr('id');
    var u=baseUrl+'/Pages/watch_lekh/'+$(this).attr('id');
    $('.loading').show();
    $.ajax({
        url:u,
        success:function(data){
            $("#watch_post").html(data);
            $("#watch_post").slideDown();
            $('.loading').hide();
        },
        error:function(e){
            alert("Sorry there was error :"+u);
            $('.loading').hide();
        }
    });
})
$(document).on('click','.eng-btn',function(){
    $('.english').show();
    $('.gujarati').hide();
});
$(document).on('click','.gu-btn',function(){
    $('.english').hide();
    $('.gujarati').show();
});