var App = function () {
	var _self = this;

	_self.init = function () {

	};

	_self.log = function (message) {
		console.log("APP LOG => " + message);
	};
	return _self;
}

jQuery(document).ready(function ($) {
	var core = new App();
	core.init();
})