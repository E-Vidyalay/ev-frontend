 $(document).ready(function(){
            setTimeout(function() {
               $('.alert-box').fadeOut(800);
            }, 3000);
            $('.alert-box').click(function(){
                $(this).fadeOut(800);
            });
  });