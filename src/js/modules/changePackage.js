let changePackage = {

    settings: {
        triggers: $('.packages .img img'),
        packages: {
            slider: $('.packages .package'),
            packageImage: $('.packages .triggers .img')
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
    },

    swipe: function(){

        this.settings.packages.slider.each(function(i, el){
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