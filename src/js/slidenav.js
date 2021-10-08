
function preventDefault(e) {

    e = e || window.event;

    if (e.preventDefault)

        e.preventDefault();

    e.returnValue = false;

}



function preventDefaultForScrollKeys(e) {

    if (keys[e.keyCode]) {

        preventDefault(e);

        return false;

    }

}


   function disableScroll() {

    if (window.addEventListener) // older FF

        window.addEventListener('DOMMouseScroll', preventDefault, false);

    window.onwheel = preventDefault; // modern standard

    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE

    window.ontouchmove = preventDefault; // mobile

    document.onkeydown = preventDefaultForScrollKeys;

}



function enableScroll() {

    if (window.removeEventListener)

        window.removeEventListener('DOMMouseScroll', preventDefault, false);

    window.onmousewheel = document.onmousewheel = null;

    window.onwheel = null;

    window.ontouchmove = null;

    document.onkeydown = null;

}



    // ----- MENU OPEN ----- //



    var nav = document.getElementById('mainNav');

    var res = document.getElementById('bookNow');

    var soc = document.getElementById('fixed-socials');



    if (res) {

        res.addEventListener('click', function () {

            var resTop = resCont.offsetTop;

            window.scroll(0, resTop)

        });

    }


     if (soc) {

        soc.addEventListener('click', function () {

            var socTop = socCont.offsetTop;

            window.scroll(0, socTop)

        });

    }





    if (nav) {

        

        var cls = document.getElementById('closePop');

        var mob = document.getElementById('navMobile');

        var nam = document.getElementById('navMobileBtn');



        var navCont = document.getElementById('navContent');

        var resCont = document.getElementById('reservation');

        var socCont = document.getElementById('fixed-socials');

        var mainCont = document.getElementById('mainContent');



        var navOver = document.getElementById('navOverlay');

        var navItems = navCont.querySelectorAll('.q_split_wrap');

        var menuScreen = document.getElementById('menu_screen');

        var menuScreenItems = menuScreen.querySelectorAll('.screen_item');



        for (var i = navItems.length - 1; i >= 0; i--) {

            var navItem = navItems[i];

            navHoverHandler(navItem, i);

        }

        ;



        nav.addEventListener('click', function () {

            hideContent();

            openNav();

        });

        nam.addEventListener('click', function () {

            hideContent();

            openNav();

        });

        cls.addEventListener('click', function () {

            showContent();

            closeNav();

        });

        TweenMax.set(navCont, {xPercent: 100});

    }



    function navHoverHandler(item, i) {

        item.addEventListener('mouseover', function () {

            TweenMax.to(

                menuScreenItems[i], .3,

                {alpha: 1, ease: Power1.easeOut}

            );

        });

        item.addEventListener('mouseout', function () {

            TweenMax.to(

                menuScreenItems[i], .3,

                {alpha: 0, ease: Power1.easeOut}

            );

        });

    }



    function hideContent() {

        disableScroll();

        TweenMax.to(

            mainCont, 1,

            {xPercent: "-=50", ease: Expo.easeOut}

        );

        TweenMax.to(

            navOver, 1.5,

            {alpha: 1, ease: Expo.easeOut}

        );

        TweenMax.to(

            nav, .6,

            {right: -200, ease: Power3.easeOut}

        );

        TweenMax.to(

            mob, .6,

            {top: -100, ease: Power3.easeOut}

        );

        TweenMax.to(

            res, .6,

            {right: -200, ease: Power3.easeOut}

        );

        TweenMax.to(

            soc, .6,

            {right: -200, ease: Power3.easeOut}

        );

        TweenMax.to(

            cls, .6,

            {right: -20, ease: Power3.easeOut}

        );

    }



    function showContent() {

        enableScroll();

        TweenMax.to(

            mainCont, 1,

            {xPercent: 0, ease: Expo.easeOut}

        );

        TweenMax.to(

            navOver, 1,

            {alpha: 0, ease: Expo.easeOut}

        );



        setTimeout(function () {

            TweenMax.to(

                res, .6,

                {right: -20, ease: Power3.easeOut}

            );

            TweenMax.to(

                nav, .6,

                {right: -20, ease: Power3.easeOut}

            );

            TweenMax.to(

                soc, .6,

                {right: -20, ease: Power3.easeOut}

            );

            TweenMax.to(

                mob, .6,

                {top: 0, ease: Power3.easeOut}

            );

        }, 1000);



        TweenMax.to(

            cls, .6,

            {right: -200, ease: Power3.easeOut}

        );





    }





    function openNav() {

        TweenMax.to(

            navCont, 1,

            {xPercent: 0, ease: Expo.easeOut}

        );



        TweenMax.staggerFromTo(

            navItems, 1,

            {alpha: 0, y: 100},

            {alpha: 1, y: 0, ease: Expo.easeOut, delay: 0.1}, 0.05

        );

    }





    function closeNav() {

        TweenMax.to(

            navCont, 1,

            {xPercent: 100, ease: Expo.easeOut}

        );

    }