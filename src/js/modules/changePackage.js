let changePackage = {

    settings: {
        triggers: $('.packages .img img, .details .triggers .img img, ' +
            '.details-about-us .triggers .img, .presentations .triggers .triggers-packages .img'),
        nextBtn: $('.details .wrapper .package .info .btns .swipe-btn, ' +
                    '.calculators .package .swipe-btn img'),
        packages: {
            slider: $('.packages .package'),
            packageImage: $('.packages .triggers .img img, .details-about-us .triggers .img, ' +
                '.presentations .triggers .triggers-packages .img'),
            packageDetail: $('.details .wrapper .package'),
            packageCalc: $('.calculators .package'),
            packages: $('.packages .package, .details .wrapper .package, .presentations .wrapper .package')
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
            console.log('test');
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

        this.settings.packages.packageCalc.each(function(i, el){
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