/**
 * Created by artem on 14.06.15.
 */
$(document).ready(function() {

    $(window).scroll(function() {
        //alert("Started scrolling!");

        var height = $('body').scrollTop();
        console.log(height);
        if (height >= 350) {
            $('#toTop').fadeIn(500);
        } else{
            $('#toTop').fadeOut(500);
        }
        $('#toTop').on('click', function() {
            console.log(this);

            $('body, html').stop().animate({
                scrollTop: "0"
            }, 500);

        });

        if(height > 500) {
            $('.about .fadeUp').fadeIn("300");
        }

    });

});