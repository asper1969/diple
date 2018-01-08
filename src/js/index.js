require('waypoints/lib/noframework.waypoints.min.js');
require('waypoints/lib/shortcuts/inview.min.js');
require('jquery-form-validator/form-validator/jquery.form-validator.min.js');
require('fancybox')($);
import {slick} from 'slick-carousel';
const ScrollMagic = require('ScrollMagic');
require('animation.gsap');
const TimelineMax = require('TimelineMax');
import changePackage from './modules/changePackage.js';
import presentation from './modules/presentationChanges.js';
jQuery.extend(jQuery.easing,{easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a}});

$(document).ready(()=>{
    changePackage.init();

    $.validate({
        lang: 'ru',
        scrollToTopOnError: false
    });
    $('header .btns .btn.btn-info').click(function(){
        $('.promos').toggleClass('active');
        $(this).toggleClass('active');

        return false;
    });
    $('.promos .close-btn').click(()=>{
        $('.promos, header .btns .btn.btn-info').removeClass('active');

        return false;
    });
    $('.packages .package').each(function(i,el){
        $(el).find('.slider').slick({
            slidesToShow: 1,
            arrows: false,
            fade: true,
            appendDots: $(el).find('.pager-wrapper'),
            dots: true,
            customPaging : function(slider, i) {
                let index = i+1;
                return '<span>'+ index +'</span>';
            }
        });
    });

    $('.packages .package .container .btn-more').click(function(){
        scrollTo($('.details'));

        return false;
    });

    $('.presentations-development .container .triggers-directions .direction, ' +
        '.presentations-about .container .triggers-directions .direction').click(function(){

        if(!$(this).hasClass('active')){
            let index = $(this).attr('data-index');
            //$(this).parent().find('.active').removeClass('active');
            //$(this).addClass('active');
            $('.presentations .wrapper .package .presentation').slick('slickGoTo', index-1);
        }
    });

    $('.presentations-development .wrapper .package .presentation, ' +
        '.presentations-about .wrapper .package .presentation').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        let index = nextSlide + 1;
        $('.presentations .container .triggers-directions .direction.active').removeClass('active');
        $('.presentations .container ' +
            '.triggers-directions .direction[data-index="' + index +'"]').addClass('active');
        console.log(index);
    });

    $('.details .wrapper .package .info .btns a.btn-calc').click(function(){
        $('.calculators').toggleClass('active');

        if($('.calculators').hasClass('active')){
            var animation = new TimelineMax()
                .to(".calculators", .3, {minHeight: "600px", opacity: 1, paddingTop: "40px", ease: Linear.easeNone});
            scrollTo($('.calculators'));
        }else{
            var animation = new TimelineMax()
                .to(".calculators", .3, {minHeight: "0px", opacity: 0, paddingTop: "0px", ease: Linear.easeNone});
                scrollTo($('.details'));
        }

        return false;
    });

    $('.details .wrapper .package .info .btns a.btn-how').click(function(){
        $('.presentations').toggleClass('active');

        if($('.presentations').hasClass('active')){
            var animation = new TimelineMax()
                .to(".presentations", .3, {minHeight: "600px", opacity: 1, ease: Linear.easeNone});
            scrollTo($('.presentations'));
        }else{
            var animation = new TimelineMax()
                .to(".presentations", .3, {minHeight: "0px", opacity: 0, ease: Linear.easeNone});
            scrollTo($('.details'));
        }

        return false;
    });

    $('.calculators>.swipe-btn').click(function(){

        if($('.calculators').hasClass('active')){
            var animation = new TimelineMax()
                .to(".calculators", .3, {minHeight: "0px", opacity: 0, paddingTop: "0px", ease: Linear.easeNone});
            $('.calculators').removeClass('active');
            scrollTo($('.details'));
        }
    });
    $('.presentations .triggers>.swipe-btn').click(function(){

        if($('.presentations').hasClass('active')){
            var animation = new TimelineMax()
                .to(".presentations", .3, {minHeight: "0px", opacity: 0, ease: Linear.easeNone});
            $('.presentations').removeClass('active');
            scrollTo($('.details'));
        }
    });

    $('.presentations .wrapper .package .presentation').slick({
        slidesToShow: 1,
        fade: true,
        dots: true,
    });

    presentation.init();

    $('.special .container .title span').hover(
        function(){
            $(this).closest('.container').find('.text').addClass('active');
        },
        function(){
            $(this).closest('.container').find('.text').removeClass('active');
        });

    $('.clients .content >ul').slick({
        slidesToShow: 4,
        variableWidth: true
    });

    $('.calculators .package .fieldset .fields .field input[type="radio"]:checked').parent().addClass('checked');
    $('.calculators .package .fieldset .fields .field input[type="radio"]').click(function(){
        if(!$(this).parent().hasClass('checked')){
            console.log($(this).closest('.fields').find('input[type="radio"]:checked').parent().attr('class'));
            $(this).closest('.fields').find('.field.checked').removeClass('checked');
            $(this).parent().addClass('checked');
        }
    });

    $('.slide .document a').fancybox();
    $('.slide .awards').slick({
        slidesToShow: 2,
        variableWidth: true
    });
    $('.slide .documents').slick({
        slidesToShow: 4,
        variableWidth: true
    });

    fancyboxModule.init();

    var controller = new ScrollMagic.Controller();
    var wipeAnimation = new TimelineMax()
        .fromTo(".benefits", 1, {height: "0", opacity: 0}, {height: "600px", opacity: 1, ease: Linear.easeNone});
    new ScrollMagic.Scene({
        triggerElement: ".benefits",
        triggerHook: "onEnter",
        duration: 500,
        offset: 150
    })
        .setTween(wipeAnimation)
        .addTo(controller);
});

function scrollTo($target){
    $('html, body').stop().animate({
        scrollTop: $target.offset().top
    }, 1500, 'easeInOutExpo');
}

var fancyboxModule = {

    settings: {
        forms: $('.hidden-region form'),
        btns: $('a.fancybox')
    },

    init: function(){
        let holder = this;
        this.settings.btns.click(function(e){
            e.preventDefault();
            let event = e;
            holder.formPopup(event);
        });
    },

    formPopup: function(e){
        e.preventDefault;
        let target = $(e.target).attr('href');

        $.fancybox.open({
            href: $(target),
            type: 'inline',
            helpers : {
                overlay : {
                    locked : false
                }
            }
        });
    }
};