//================================== USAGE ==================================
//
//    if (user.Browser.Chrome || user.Browser.Mozilla) {}
//    if (user.Browser.IE) {}
//
//===========================================================================


if (!window.User) { window.User = function(){}; }

User.prototype.Init = function() {
    this.userAgent = navigator.userAgent.toLowerCase();

    // Figure out what browser is being used.
    this.Browser = {
        Version: (this.userAgent.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [])[1],
        Chrome: /chrome/.test(this.userAgent),
        Safari: /webkit/.test(this.userAgent),
        Opera: /opera/.test(this.userAgent),
        IE: /msie/.test(this.userAgent) && !/opera/.test(this.userAgent),
        Mozilla: /mozilla/.test(this.userAgent) && !/(compatible|webkit)/.test(this.userAgent),
        Check: function() { alert(this.userAgent); }
    };
};

var user = new User();
user.Init();
