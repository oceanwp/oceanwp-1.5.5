/*
 * Script by - elinsTemplate
 */

(function ($) {
    $(document).ready(function () {
        var appElins = {
            events: {
                load: {
                    init: function () {
                        this.testInit();
                        this.widthBottomPanelMainBanner();
                        this.widthMediaTestonomies();
                        this.stickyForm();
                    },
                    testInit: function () {
                        console.log('load event is active');
                    },
                    widthBottomPanelMainBanner: function () {
                        if ($('#el-main-banner > .el-box').length > 0) {
                            var offset = $('#el-main-banner > .el-box').offset().left;
                            $('#el-main-banner .el-bottom-content').css({
                                'width': 'calc(100% + ' + (offset + 15) + 'px)'
                            })
                        }

                    },
                    widthMediaTestonomies: function () {
                        if ($('#el-author-inf > .el-box').length > 0) {
                            var offset = $('#el-author-inf > .el-box').offset().left;
                            $('section#el-testonomials .el-column.el-media').css({
                                'width': 'calc(50% + ' + (offset + 15) + 'px)',
                                'margin-left': '-' + (offset + 15) + 'px'
                            })
                        }

                    },
                    stickyForm: function(){
                        if($('section.el-header-banner .el-box').length > 0){
                            var offset_left = $('section.el-header-banner .el-box').offset().left
                            setTimeout(function(){
                                $('section.el-header-banner .el-form-column').css({
                                    height: parseInt($('.el-bottom-contact').offset().top - 50)
                                })

                                $('#form-pt1-1').css({
                                    opacity: 1,
                                    left: offset_left + 35,
                                    top: $('#el-main-menu').height() + 40
                                })
                                $(window).scroll(function(){
                                    var t = $('.el-bottom-contact').offset().top - ($(window).outerHeight())
                                    var s = $(this).scrollTop();

                                    if(t < s){
                                        $('#form-pt1-1').css({
                                            opacity: 0,
                                            visibility: 'hidden'
                                        })
                                    }else{
                                        $('#form-pt1-1').css({
                                            opacity: 1,
                                            visibility: 'visible'
                                        })
                                    }
                                })
                            }, 500)
                        }

                    }
                },
                click: {
                    init: function () {
                        this.testInit();
                        this.videoPopup();
                        this.tabFrontTestonomies();
                        this.burgermenu();
                        this.drop_submenu_mobile();
                        this.click_form_mobile();
                        this.tab_pt1();
                        //this.lazyScroll();
                    },
                    testInit: function () {
                        console.log('click event is active');
                    },
                    lazyScroll: function () {
                        $('li.lazy-scroll a, a.lazy-scroll').bind('click', function (e) {
                            e.preventDefault();
                            e.stopPropagation();
                            console.log('is lazy')
                            var $this = $(this),
                                $link = $(this).attr('href');
                            if ($($link).length < 1) {
                                console.log('redirect page');
                                window.location.href = window.location.origin + $link;
                                return false;
                            } else {
                                if ($(this).hasClass('__notpush')) {
                                    $('html, body').animate({
                                        scrollTop: $($link).offset().top
                                    }, 1000);
                                } else {
                                    $('html, body').animate({
                                        scrollTop: $($link).offset().top - $('body > header').outerHeight()
                                    }, 1000);
                                }
                                if (window.outerWidth < 998) {
                                    $(".hamburger").removeClass("is-active");
                                    $('body').removeClass('open_mob_menu')
                                }
                            }

                        })
                    },
                    videoPopup: function () {
                        $('.open-video-popup').click(function (e) {
                            var videoUrl = $(this).data('url'),
                                title = $(this).find('.el-title-v p').text();

                            var output = '<div class="el-modal-video"><span class="el-close-modal-video" data-click="close-modal"><i data-click="close-modal" class="material-icons">close </i></span>';
                            output += '<div class="el-title-modal">' + title + '</div>'
                            output += '<iframe src="' + videoUrl + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
                            output += '</div> ' //close modal video

                            var modal = '<div class="el-overlay-modal" data-click="close-modal"></div>';

                            $('body').addClass('el-open-modal');

                            $('body').append(modal);
                            $('body').append(output);

                        })
                        $('body').bind('click', function (e) {
                            if ($(e.target).data('click') === 'close-modal') {
                                $('body').removeClass('el-open-modal');
                                $('.el-modal-video').remove();
                                $('.el-overlay-modal').remove();
                            }
                        })
                    },
                    tabFrontTestonomies: function () {

                        function TabTestonomies(event) {
                            this.event = event;
                            this.index = 0;
                            this.active = 0;
                        }

                        TabTestonomies.prototype.is = function (e) {
                            this.element = e;
                            this.index = $(e).index();
                            this.debug()
                        }
                        TabTestonomies.prototype.tab = function (t) {
                            $(this.element).addClass('active');
                        }
                        TabTestonomies.prototype.btn = function (k) {

                        }
                        TabTestonomies.prototype.init = function (j) {
                            if (j == 'tab') {
                                this.tab()
                            }
                        }
                        TabTestonomies.prototype.debug = function () {
                            var data = {
                                element: this.element,
                                event: this.event,
                                index: this.index,
                                active: '',
                            }
                            //console.log(data);
                        }


                        $('section#el-testonomials .el-tab').click(function (e) {
                            //var Testonomies = new TabTestonomies('tab');
                            //Testonomies.init('tab');
                            //Testonomies.is(e.currentTarget);
                            $(this).siblings().removeClass('active');
                            $(this).addClass('active');
                            $('section#el-testonomials .el-variant').removeClass('active');
                            $('section#el-testonomials .el-variant').eq($(this).index()).addClass('active');
                        });
                        $('section#el-testonomials .el-arrow-slide > div').click(function () {
                            if ($(this).hasClass('el-prev')) {
                                $('section#el-testonomials .el-tab.active').prev().addClass('active');
                                $('section#el-testonomials .el-tab.active').next().removeClass('active');

                                $('section#el-testonomials .el-variant.active').prev().addClass('active');
                                $('section#el-testonomials .el-variant.active').next().removeClass('active');
                            }
                            if ($(this).hasClass('el-next')) {
                                $('section#el-testonomials .el-tab.active').next().addClass('active');
                                $('section#el-testonomials .el-tab.active').prev().removeClass('active');

                                $('section#el-testonomials .el-variant.active').next().addClass('active');
                                $('section#el-testonomials .el-variant.active').prev().removeClass('active');
                            }
                        })
                    },
                    burgermenu: function () {
                        $(document).ready(function () {
                            $(".hamburger").click(function () {
                                $(this).toggleClass("is-active");
                                $('body').toggleClass("open-body-menu");
                                $('html').css({overflow: 'hidden'});
                                $('#el-mobile-menu').toggleClass("el-open-menu");
                                if ($(this).hasClass('is-active')) {

                                    $('#el-main-menu').css({
                                        top: $('#el-mobile-menu').offset().top - $('.el-wrapper').offset().top,
                                        position: 'absolute'
                                    })

                                    $('body > .el-wrapper').css({
                                        transform: 'translateX(-' + $('#el-mobile-menu').width() + 'px)',
                                        transition: 'transform 0.5s'
                                    })
                                } else {
                                    $('#el-main-menu').removeAttr('style')
                                    $('body > .el-wrapper').removeAttr('style')
                                    $('html').removeAttr('style')
                                }
                            });
                        });
                    },
                    drop_submenu_mobile: function () {
                        $('#el-mobile-menu ul.menu li.menu-item-has-children').click(function (e) {
                            $(this).toggleClass('el-active-item')
                        })
                    },
                    click_form_mobile: function () {
                        $('.el-mobile-fx-panel .el-form').bind('click', function (e) {
                            $('.el-overlay-mob-fix').addClass('el-open')
                            $('#el-fixed-form').addClass('el-open');
                        });
                        function hideModal() {
                            $('#el-fixed-form').removeClass('el-open');
                            $('.el-overlay-mob-fix').removeClass('el-open')
                        }

                        $('.el-overlay-mob-fix, #el-fixed-form .el-close-circle').click(function () {
                            hideModal();
                        })
                    },
                    tab_pt1: function(){
                        $('#el-tabs-pt1 .el-tab-title-row .el-label').bind('click', function(e){
                            var $this = $(this),
                                index = $this.index();
                            $this.siblings().removeClass('active');
                            $this.addClass('active');


                            $('#el-tabs-pt1 .el-tab-cont-row .el-inner-content').removeClass('active');
                            $('#el-tabs-pt1 .el-tab-cont-row .el-inner-content').eq(index).addClass('active');
                        });
                    }
                },
                hover: {
                    init: function () {
                        this.testInit();
                    },
                    testInit: function () {
                        console.log('hover event is active');
                    }
                },
                keywords: {
                    init: function () {
                        this.testInit();
                    },
                    testInit: function () {
                        console.log('keywords event is active');
                    }
                },
                resize: {
                    init: function () {
                        this.testInit();
                    },
                    testInit: function () {
                        console.log('resize event is active');
                    }
                },
                scroll: {
                    init: function () {
                        this.testInit();
                        this.inverseHeader();
                        //this.stikyMenu();
                    },
                    testInit: function () {
                        console.log('scroll event is active');
                    },
                    inverseHeader: function () {
                        $(window).scroll(function (e) {
                            var st = $(this).scrollTop();
                            if (st > 10) {
                                $('#el-main-menu.el-front').addClass('el-inverse');
                            } else {
                                $('#el-main-menu.el-front').removeClass('el-inverse');
                            }
                        })
                    },
                    stikyMenu: function () {
                        $(window).scroll(function (e) {
                            var st = $(this).scrollTop()
                            console.log(st);
                            $('#el-main-menu').css({
                                top: st
                            })
                        })
                    }
                }
            },
            plugins: {
                init: function () {
                    this.testInit();
                    this.sliders.init()
                },
                testInit: function () {
                    console.log('plugins is active');
                },
                sliders: {
                    init: function () {
                        this.couchVideo();
                        this.gallaryProfuct();
                        this.pt1_testomony();
                        this.people_cp();
                    },
                    couchVideo: function () {
                        $('section#el-video .el-repeat-video').slick({
                            rtl: true,
                            slidesToShow: 3,
                            dots: true,
                            infinite: true,
                            responsive: [{
                                breakpoint: 998,
                                settings: {
                                    slidesToShow: 2
                                },
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 1
                                }
                            }]
                            //nextArrow: '<button type="button" class="slick-next"><i class="material-icons">arrow_back_ios </i></button>',
                            //prevArrow: '<button type="button" class="slick-prev"><i class="material-icons">arrow_forward_ios </i></button>'
                        });
                    },
                    gallaryProfuct: function () {
                        $('section#el-products-catalog .el-repeater-product').slick({
                            rtl: true,
                            slidesToShow: 6,
                            arrows: false,
                            dots: true,
                            centerPadding: '10px',
                            centerMode: true,
                            infinite: true,
                            responsive: [
                                {
                                    breakpoint: 1700,
                                    settings: {
                                        slidesToShow: 5,
                                        slidesToScroll: 2,
                                    }
                                },
                                {
                                    breakpoint: 1400,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 1,
                                    }
                                },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }
                            ]
                        })
                    },
                    pt1_testomony: function () {
                        $('section.el-testomonials .el-wrap-slider').slick({
                            rtl: true,
                           // slidesToShow: 2,
                            arrows: false,
                            dots: true,
                            speed: 500,
                            fade: true,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            cssEase: 'linear'
                        })
                    },
                    people_cp: function(){
                        $('section#el-people .el-repeater-people').slick({
                            rtl: true,
                            slidesToShow: 3,
                            dots: false,
                            infinite: true,
                            responsive: [{
                                breakpoint: 998,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 2,
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }]
                            //nextArrow: '<button type="button" class="slick-next"><i class="material-icons">arrow_back_ios </i></button>',
                            //prevArrow: '<button type="button" class="slick-prev"><i class="material-icons">arrow_forward_ios </i></button>'
                        });
                    }
                }
            }
        };


        function initApp(parent, arr) {
            for (var item in parent) {
                parent[item].init();
            }
        }

        // init events
        initApp(appElins.events, ['load', 'click', 'hover', 'keywords', 'resize', 'scroll']);
        //init plugins
        appElins.plugins.init();
    })
})(jQuery);