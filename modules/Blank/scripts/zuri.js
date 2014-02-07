    
    //=========================================================
    //| Written by Andy Jepkes 2012
    //| andy@andyjepkes.com
    //| 
    //|
    //=========================================================


(function( $ ){
    ZURI = function(){};

    //====================== DEFINITIONS ======================
    ZURI.prototype.Init = function(){
        this.Settings = {
            value: true
        };
        this.PG = {
            main: {
                $Btn: $('#mainBTN'),
                $Win: $('#mainWIN'),
                state: 1,
                offset: 989
            },
            map: {
                $Btn: $('#mapBTN'),
                $Win: $('#mapWIN'),
                state: 0,
                offset: 1003
            }
        };
        this.SetWins();
        //this.ResizeBody(this.PG.main);
    }
        
    //====================== LISTENERS ======================
    ZURI.prototype.SetWins = function(){        
        var targetItem;
        var page = this.PG;
        $('ul.ui-list').on('click', 'li', function(e) { 
            var targetBtn = $(e.currentTarget);
            for (var item in page){
                if(page[item].$Btn.selector == ('#' + targetBtn[0].id)){ 
                    if (page[item].state != 1){
                        targetItem = page[item];
                        _click();
                    }
                }
            }
            
        });
        var _click = $.proxy(function() {
            this.ClickAction(targetItem);
        }, this);
    }  
 
    //====================== ACTIONS ======================
    ZURI.prototype.ClickAction = function(item){     
    	console.info(item);   
        this.WindowClear();
        this.ResizeBody(item);
        this.WindowIn(item);
    }
        
    ZURI.prototype.WindowIn = function(item){
        item.$Win.animate({'right': '+=' + item.offset + 'px'}, {
            duration:300,
            specialEasing: {
                right: 'easeOutElastic'                        
            }
        });
        item.state = 1;
    }

    ZURI.prototype.ResizeBody = function(item){
    	var _nS = item.$Win.height() + 0;
    	var _sS = _nS + 'px';
    	console.info('new size', _sS );
		$('#CONTENT-BODY').animate({ 'height': _sS }, 'fast');
    }    

    ZURI.prototype.WindowClear = function(){
        var page = this.PG;
        for (var item in page){
        	var _offset = '-=' + page[item].offset + 'px';
            if (page[item].state == 1){
                page[item].$Win.animate({'right': _offset }, 'fast');
                page[item].state = 0;
            };    
        }
    }
}) ( jQuery );