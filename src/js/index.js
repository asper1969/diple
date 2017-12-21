require('waypoints/lib/noframework.waypoints.min.js');
require('waypoints/lib/shortcuts/inview.min.js');
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
});
