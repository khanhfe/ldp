window.onload = function () {
    $(document).ready(function () {

        // tabs
        $('.nav-tabs li a').click( function (e) {
            e.preventDefault();
            $(this).parent().addClass('active').siblings().removeClass('active');
            const tab = $(this).attr('href');
            $(tab).fadeIn(0).siblings().fadeOut(0);
        })

        // modal
        $('button.btn').click( function(){
            const action = $(this).data('action');
            if(action){
                $('.modal').addClass('active');
                $(`[data-modal=`+action+`]`).fadeIn(0).siblings('.modal-content__inner').fadeOut(0);
            }
        });
        $('.backdrop, [data-action=close]').click( function(){
            $('.modal').removeClass('active');
            $('*[data-modal]').fadeOut(0)
        })
    });
}