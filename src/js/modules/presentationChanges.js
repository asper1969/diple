let presentation = {

    settings: {
        triggers: {
            bannersToSearch: $('.presentations-marketing .triggers .triggers-directions .direction'),
            //yadexToGoogle: $('.presentations .triggers .triggers-packages .img')
        },
        presentations: $('.presentations .wrapper .presentation'),
        //engines: $('.presentations .wrapper .package')
    },

    init: function(){
        let handler = this;

        this.settings.triggers.bannersToSearch.click(function(){

            if(!$(this).hasClass('active')){
                handler.settings.triggers.bannersToSearch.removeClass('active');
                $(this).addClass('active');
                handler.bannersToSearch();
            }

            return false;
        });

        //this.settings.triggers.yadexToGoogle.click(function(){
        //
        //    if(!$(this).hasClass('active')){
        //        handler.settings.triggers.yadexToGoogle.removeClass('active');
        //        $(this).addClass('active');
        //        handler.yandexToGoogle();
        //    }
        //
        //    return false;
        //});
    },

    bannersToSearch: function(){
        let handler = this;

        this.settings.presentations.each(function(i, el){
            let $presentation = $(this);
            if($presentation.hasClass('active')){
                $presentation.removeClass('active');
            }else{
                $presentation.addClass('active');
            }
        });
    },

    yandexToGoogle: function(){
        let handler = this;

        this.settings.engines.each(function(i, el){
            let $presentation = $(this);
            if($presentation.hasClass('active')){
                $presentation.removeClass('active');
            }else{
                $presentation.addClass('active');
            }
        });
    }
};

module.exports = presentation;