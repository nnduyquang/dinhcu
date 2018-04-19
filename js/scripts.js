var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    statisCount:$('#h_statis'),
    customerCarousel:$('.customer_carousel')
};
$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }
    sidebar();
    function runStatisCount(){
        var waypoint = new Waypoint({
            element: document.getElementById('h_statis'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("hs1", 0, 500, 0, 1.5, options1);
                var numHs2 = new CountUp("hs2", 0, 1000, 0, 2, options1);
                var numHs3 = new CountUp("hs3", 0, 100, 0, 2.2, options2);
                var numHs4 = new CountUp("hs4", 0, 500, 0, 2, options1);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();
                waypoint.disable();
            },
            offset: '85%'
        })
    }
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function customerCarousel() {
        plugins.customerCarousel.not('.slick-initialized').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '.arrow-prev1',
            nextArrow: '.arrow-next1',
            mobileFirst: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 480,
                slidesToShow: 1,
                slidesToScroll: 1,
            }]
        });
    }
    if (plugins.slider.length) {
        runSlider();
    }
    if(plugins.statisCount.length){
        runStatisCount()
    }
    if (plugins.customerCarousel.length) {
        customerCarousel();
    }
});