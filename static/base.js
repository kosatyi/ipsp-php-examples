(function($){
    $.modal = function(url,callback){
        var modal = $('<div/>').addClass('modal');
        var show  = function(){
            $('html,body').addClass('modal-show');
            modal.addClass('show');
        };
        var hide  = function(){
            $('html,body').removeClass('modal-show');
            modal.removeClass('show');
            modal.remove();
        };
        modal.on('click','.modal-close',hide);
        $.get(url).then(function(content){
            modal.html(content).appendTo('BODY');
            return modal;
        }).then(callback).then(show);
    };
})(jQuery);

(function(){

    var checkout_styles = {
        '.page-section-tabs':{
            'display':'none'
        },
        '.pages-checkout':{
            'background':'transparent'
        },
        'html,body':{
            'overflow':'hidden',
            'padding':0,
            'margin':0
        },
        '.page-section-shopinfo .col-login,.gui_input_suggest .arrow':{
            'display':'none'
        }
    };

    this.initCheckout = function(modal){
        var wrapper      = modal.find('[data-checkout]');
        var checkout_url = wrapper.data('checkout');
        $oplata.get('checkout').scope(function(){
            this.setCheckoutWrapper(wrapper.get(0));
            this.setModal(false);
            this.setCssStyle(checkout_styles);
            this.loadUrl(checkout_url);
        });
    };
})();

