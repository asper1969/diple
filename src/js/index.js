require('waypoints/lib/noframework.waypoints.min.js');
require('waypoints/lib/shortcuts/inview.min.js');
require('jquery-form-validator/form-validator/jquery.form-validator.min.js');
require('fancybox')($);
import {slick} from 'slick-carousel';
import {TimelineMax} from 'gsap';
import changePackage from './modules/changePackage.js';
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