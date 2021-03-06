(function(){

	if(!ADMIN) { var ADMIN = function(){} }
	console.info('ADMIN');

	ADMIN.prototype.Init = function() {
		this.toggleDev = $('.toggle-devmode');
		this.devWindow = $('#ajcore-admin');
		$.proxy(this.bindEvents(), this);
	}

	ADMIN.prototype.bindEvents = function() {
		//this.toggleDev.hide();
		this.toggleDev.on('click', $.proxy(function() {
			if (this.devWindow.hasClass('devOpen')){
				console.info('has Class');
				this.minimizeDev();
			} else {
				this.maximizeDev();
			}
		}, this));
	}

	ADMIN.prototype.minimizeDev = function() {
		console.info('minimize');
		this.devWindow.animate({
			top: "-=1000",
		}, 500);
		this.devWindow.removeClass('devOpen');
	}

	ADMIN.prototype.maximizeDev = function() {
		console.info('maximize');
		this.devWindow.animate({
			top: "+=1000",
		}, 500);
		this.devWindow.addClass('devOpen');
	}

	var admin = new ADMIN();
	admin.Init();
}());