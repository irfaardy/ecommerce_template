 $(function() {
             if ($(window).scrollTop() > 10) {
                    $('.navbar_landing').addClass('active');
                    // $('.brand').attr("src", "img/logo.png");
                } else {
                    $('.navbar_landing').removeClass('active');
                    // $('.brand').attr("src", "img/logo_wt.png");
                }
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar_landing').addClass('active');
                    // $('.brand').attr("src", "img/logo.png");
                } else {
                    $('.navbar_landing').removeClass('active');
                    // $('.brand').attr("src", "img/logo_wt.png");
                }
            });
          //   $('a').click(function(){
          //     $('html, body').animate({
          //         scrollTop: $( $(this).attr('href') ).offset().top
          //     }, 500);
          //     return false;
          // });
        });