require('waypoints/lib/noframework.waypoints.min.js');
require('waypoints/lib/shortcuts/inview.min.js');
require('fancybox')($);
import {slick} from 'slick-carousel';
import {TimelineMax} from 'gsap';
import changePackage from './modules/changePackage.js';

$(document).ready(()=>{
    changePackage.init();

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
});
