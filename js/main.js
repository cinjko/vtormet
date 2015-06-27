/**
 * Created by artem on 14.06.15.
 */
$(document).ready(function() {

    $(window).scroll(function() {

        var height = $('body').scrollTop();
        //console.log(height);
        if (height >= 350) {
            $('#toTop').fadeIn(500);
        } else{
            $('#toTop').fadeOut(500);
        }
        $('#toTop').on('click', function() {

            $('body, html').stop().animate({
                scrollTop: "0"
            }, 500);

        });

        if(height > 200) {
            $('.about .animated').addClass('fadeInUp');
        }

        if(height > 1100) {
            $('.team .animated').addClass('fadeInUp');
        }

        if(height > 1900) {
            $('.review .animated').addClass('fadeInDown');
        }
    });

    $('#navbar-collapse li a').on('click', function() {
        $('#navbar-collapse li a.first-active').removeClass('first-active');
        console.log($(this));
        $(this).addClass('first-active');
    })

});