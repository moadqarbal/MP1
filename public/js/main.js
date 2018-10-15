(function () {

    "use strict";
/*
    UIkit.notification({
        message: 'Bienvenue :) ',
        status: 'danger',
        pos: 'bottom-right',
        timeout: 3000
    });
*/



   // alert("hello");

    //media query event handler
    if(matchMedia){
        const mq = window.matchMedia( "(max-width:768px)" );//sets the width you want
        mq.addListener(WidthChange);
        WidthChange(mq)
    }

    function WidthChange(mq){
        if(mq.matches){
            //if window width is less than or equal to 768px;
            $("#navbar_toggle").removeClass("dis-none"); //makes toggler visible
            $("#navbar_collapse").addClass("dis-none");//makes the menu not visible initially
            //so you can only see the menu items when you click the toggler

            $("#navbar_toggle").on('click', function(e){
                console.log(e)
                $("#navbar_collapse").slideToggle();
                $("#navbar_collapse").css({"display": "block"});
            })
        }else{
            //for larger screens
            console.log('on large screen');
            $("#navbar_toggle").addClass('dis-none');
            $("#navbar_collapse").removeClass('dis-none');
        }
    }


}) ();


