    
    //=========================================================
    //| Written by Andy Jepkes 2012
    //| andy@andyjepkes.com
    //| 
    //| 1) Load the script file and the css file in the <head>.
    //| 2) Define the settings below by passing an object
    //|    when you instantiate.
    //| 3) Scroll to the bottom to see how to instantiate 
    //|    the UI object on the page.
    //|
    //=========================================================

(function( $ ){
    UI = function(){};
    
    // ================== DO NOT TOUCH! =======================
    // Pass an object like this one when you instantiate 
    // to define the settings.
    UI.prototype.Settings = {
        UITopPosition: '20px',
        UIRightPosition: '2px',
        ContentTopPadding: '100px',
        BodyOffsetPadding: 0,
        contentWidth: '800px',
        setupMode: false
    }
        
    UI.prototype.Init = function(obj){
        this.Settings = $.extend(this.Settings, obj);
    
        this.$UIWrapper = $('div#UI');
        this.$ContentWrapper = $('div#CONTENT-WRAPPER');
        this.$cBody = $('div#CONTENT-BODY');
        this.$btns = $('div#UI li');
        this.$terminals = $('div.left-terminal, div.right-terminal');
        this.$lPattern = $('div.left-bar-pattern');
        this.$rPattern = $('div.right-bar-pattern');
        
        $('div#UI').on('click', 'li', $.proxy(this.ClickAction, this)); 
    
        this.$cBody.css('width', this.Settings.contentWidth);
        this.AdjDimentions();
        if (this.Settings.setupMode){
            this.SetupMode();
        }
    }

    UI.prototype.ClickAction = function(e){
        target = $(e.currentTarget);
        this.$btns.removeClass('selected');   
        if (!target.hasClass('ui-li')){
            target = $(target).parent();
        }
        if (!target.hasClass('selected')){
            target.addClass('selected');
        }
        this.AdjDimentions();
    }
        
    UI.prototype.SumWidth = function(obj) {
        var _w = 0;
        obj.each(function(){
            _w += this.offsetWidth;
        });
        return _w;
    }
    
    UI.prototype.GetDimentions = function(){
        this.cBodyWidth = this.$cBody.width() - (this.Settings.BodyOffsetPadding * 2 );
        this.uiWidth = this.cBodyWidth + this.SumWidth(this.$terminals);

        this.lMargin = 0;
        this.rMargin = 0;

        this.GetMargins = function(){
            var _gap = this.cBodyWidth - this.SumWidth(this.$btns);
            //console.info(_gap);
            if (_gap % 2 == 0){ 
                this.lMargin = _gap / 2;
                this.rMargin = _gap / 2;
            } else {
                this.lMargin = (Math.round(_gap / 2) - 1);
                this.rMargin = Math.round( _gap / 2);
            }
            
        }
        this.GetMargins();       
    }
 
    UI.prototype.AdjStyles = function() {
        this.$cBody.css('padding-top', this.Settings.ContentTopPadding);
        $('.ui-divider, .ui-last-divider').show();
        for (var i = 0; i < this.$btns.length; i++) {
            if ($(this.$btns[i]).hasClass('selected')){
                $('div.ui-divider', this.$btns[i]).hide();
                if (i != (this.$btns.length - 1)){
                    $('div.ui-divider', this.$btns[(i + 1)]).hide();
                } else {
                    $('div.ui-last-divider', this.$btns).hide();
                }
            }
        }   
    }
            
    UI.prototype.AdjDimentions = function(){
        this.GetDimentions();
        
        this.$lPattern.css('width', this.lMargin);
        this.$rPattern.css('width', this.rMargin);
        this.$UIWrapper.css(
            'width', this.uiWidth).css( 
            'top', this.Settings.UITopPosition).css(
            'right', this.Settings.UIRightPosition
        );
        this.$ContentWrapper.css('width', this.uiWidth);

        this.AdjStyles();    
        if (this.Settings.setupMode) {
              this.ShowDimentions();    
        }
    }

    //====================== SETUP FUNCTIONS ======================

    UI.prototype.SetupMode = function() {
        this.$cBody.addClass(this.Settings.setupMode ? 'show-border' : '' );
        this.$ContentWrapper.addClass(
            this.Settings.setupMode ? 'show-border' : '' 
        );
        this.TestWindow();
        var $this = this;
        var $body =  $('#CONTENT-BODY');
        $body.prepend('<div class="UI_test show-border">');

        $body.on('click', 'input:text', function(){$('input:text').select();});
        $('input').on('keyup', function(){  $('form').submit();
            if ($('input').val() != $('input:text').attr('prev')){
               
            }
        });
        $('form').on('submit', function(){
            var _val = $('input').val();
            $('li.selected p').text(_val);
            $('input:text').attr('prev', _val);
            $('span.output').text($('li.selected').width());
            $this.AdjDimentions();
            return false;
        });
    }

    UI.prototype.ShowDimentions = function() {
        console.info('Showing dimentions');
        $('#UISetup').remove();
        this.$cBody.prepend('<div id="UISetup" class="show-border"></div>');     
        var $set = $('#UISetup');
        var dim = {
            ContentBodyWidth: this.cBodyWidth,
            ContentWrapperWidth: this.cBodyWidth + this.SumWidth(this.$terminals),
            UIWidth: this.uiWidth,
            TerminalWidth: this.SumWidth(this.$terminals),
            ButtonsWidth: this.SumWidth(this.$btns),
            LeftMargin: this.lMargin,
            RightMargin: this.rMargin
        };
        for (var item in dim) {
            if (dim.hasOwnProperty(item)) {
                $set.append('<p>' + item + ' :: <span class="bold">' + dim[item] + '</span></p>');
            }
        }
    }

    UI.prototype.TestWindow = function() {
        
        var $test =  $('#CONTENT-BODY');
        //$('div.UI_test').html().remove();
        var _html = '<p class="test">Adjust the selected button</p><form class="test"><input class="test" type="text" value="Enter a value"><input class="test" type="submit"></form><p class="test">Selected button width: <span class="output test"></span></p>'
        $body.prepend(_html);

        $('input:submit').hide();
        $('span.output').text($('li.selected').width());
        
    }
}) ( jQuery );