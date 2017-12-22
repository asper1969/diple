let changePackage = {

    settings: {
        triggers: $('.packages .img img, .details .triggers .img img'),
        nextBtn: $('.details .wrapper .package .info .btns .swipe-btn'),
        packages: {
            slider: $('.packages .package'),
            packageImage: $('.packages .triggers .img img'),
            packageDetail: $('.details .wrapper .package'),
            packages: $('.packages .package, .details .wrapper .package')
        }
    },

    init: function(){
        let handler = this;

        this.settings.triggers.click(function(){

            if(!$(this).closest('.package').hasClass('active')){
                handler.swipe();
            }

            return false;
        });

        this.settings.nextBtn.click(function(){
            handler.swipe();

            return false;
        });
    },

    swipe: function(){

        this.settings.triggers.each(function(i, el){
            let $package = $(this).parent();

            if($package.hasClass('active')){
                $package.removeClass('active');
            }else{
                $package.addClass('active');
            }
        });

        this.settings.packages.packages.each(function(i, el){
            let $package = $(this);

            if($package.hasClass('active')){
                $package.removeClass('active');
            }else{
                $package.addClass('active');
            }
        });

        this.settings.packages.packageImage.each(function(i, el){
            let $package = $(this);

            if($package.hasClass('active')){
                $package.removeClass('active');
            }else{
                $package.addClass('active');
            }
        });
    }
};

module.exports = changePackage;