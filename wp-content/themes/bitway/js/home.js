var $navigator = $('.page-navigator');
var $window = $(window);
var $animatedItems = $('.animate_');
var $lines = $('.laptop *, .graff_ *');
var $secTwo = $('.section_02').find('svg');
var $circles = $secTwo.find('*');
var $seq = $('.seq_');

(function ($, window, document) {
    'use strict';

    var page = {
            init: function () {
                var $body = $('body');
                var scroll = $window.scrollTop() >= $('.section_04').offset().top - $window.height() + 400;
                $navigator.find('a').on('click', function (el) {
                    el.preventDefault();
                    $navigator.find('a').removeClass('active');
                    $(this).addClass('active');
                });
                $('.section_01').ready(function () {
                    var $item = $('.section_01').find('.item');
                    setTimeout(function () {
                        $('.preloader-wrap').addClass('hide_');
                        $('.preloader-wrap').fadeOut(1000);
                    }, 300);
                    setTimeout(function () {
                        $item.each(function (i) {
                            var $this = $(this);
                            setTimeout(function () {
                                $this.animate({
                                    opacity: '1',
                                    top: '0px'
                                }, 700, 'easeOutBounce');
                            }, i * 300);
                        });
                    }, 700);
                });
                if ($window.scrollTop() >= $('.section_02').offset().top - $window.height() + 400) {
                    $window.one('scroll', function () {
                        TweenLite.to($secTwo, 1, {opacity: 1, delay: 0.5});
                        TweenLite.to($circles, 6, {strokeDashoffset: 0, delay: 1});
                    });
                    $animatedItems.css({
                        'transform': 'translateY(0px)',
                        '-webkit-transform': 'translateY(0px)',
                        '-moz-transform': 'translateY(0px)',
                        '-ms-transform': 'translateY(0px)',
                        'opacity': 1
                    })
                }
                if($body.width() > 1024) {
                    $('.animate_').css({
                        'transform': 'translateY(-25px)',
                        '-webkit-transform': 'translateY(-25px)',
                        '-moz-transform': 'translateY(-25px)',
                        '-ms-transform': 'translateY(-25px)',
                        'opacity': 0
                    });
                }

                var $section = $('.section');
                var inp = $section.find('.form-holder').find('.input-holder');
                inp.eq(0).find('input').attr('placeholder', 'Enter your email');
                inp.eq(1).find('input').attr('placeholder', 'First Name');
                inp.eq(2).find('input').attr('placeholder', 'Last Name');
            },
            load: function () {
            },
            resize: function () {
            }
            ,
            scroll: function () {
                var scroll = $window.scrollTop() >= $('.section_04').offset().top - $window.height() + 400;
                if (scroll) {
                    $window.one('scroll', function () {
                        TweenLite.to($lines, 7, {strokeDashoffset: 0, delay: 0});
                        $seq.each(function (i) {
                            var $this = $(this);
                            setTimeout(function () {
                                $this.animate({
                                    opacity: '1',
                                    top: '0px'
                                }, 700, 'easeOutBounce');
                            }, i * 400);
                        });
                    });
                };
                if ($window.scrollTop() >= $('.section_02').offset().top - $window.height() + 400) {
                    $window.one('scroll', function () {
                        TweenLite.to($secTwo, 1, {opacity: 1, delay: 0.5});
                        TweenLite.to($circles, 6, {strokeDashoffset: 0, delay: 1});
                    });
                    $animatedItems.css({
                        'transform': 'translateY(0px)',
                        '-webkit-transform': 'translateY(0px)',
                        '-moz-transform': 'translateY(0px)',
                        '-ms-transform': 'translateY(0px)',
                        'opacity': 1
                    })
                }
                if ($window.scrollTop() >= $('.section_01').offset().top - 120) {
                    $navigator.find('a').removeClass('active');
                    $navigator.find('li').eq(0).find('a').addClass('active');
                }
                if ($window.scrollTop() >= $('.section_02').offset().top - 120) {
                    $navigator.find('a').removeClass('active');
                    $navigator.find('li').eq(1).find('a').addClass('active');
                }
                if ($window.scrollTop() >= $('.section_03').offset().top - 120) {
                    $navigator.find('a').removeClass('active');
                    $navigator.find('li').eq(2).find('a').addClass('active');
                }
                if ($window.scrollTop() >= $('.section_04').offset().top - 120) {
                    $navigator.find('a').removeClass('active');
                    $navigator.find('li').eq(3).find('a').addClass('active');
                }
                // if ($window.scrollTop() >= $('.section_05').offset().top - 120) {
                //     $navigator.find('a').removeClass('active');
                //     $navigator.find('li').eq(4).find('a').addClass('active');
                // }
                // if ($window.scrollTop() >= $('.section_06').offset().top - 120) {
                //     $navigator.find('a').removeClass('active');
                //     $navigator.find('li').eq(5).find('a').addClass('active');
                // }
            }
        }
        ;

    $(document).ready(page.init);
    $(window).on({
        'load': page.load,
        'resize': page.resize,
        'scroll': page.scroll
    });
})
(jQuery, window, document);
