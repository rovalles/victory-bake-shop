$(function(){
	var config = {
		client_id: '9f21aed56edd46619626d932ed574379',
		access_token: '681423320.9f21aed.c832aa978af342a1a15316919bf8287b',
		user_id: '1681423320',
		scope: ['basic']
	};

	$.ajax({
		method: 'GET',
		dataType: "jsonp",
		cache: true,
		url: 'https://api.instagram.com/v1/users/' + config.user_id + '/media/recent/?client_id=' + config.client_id,
	}).done(function(data) {
		var $id = $('#template'),
			template = $id.html();

		Mustache.parse(template);

		var rendered = Mustache.render(template, data);
		$id.replaceWith(rendered);
	});

	var $body = $('html, body');
	var $footer = $('#footer');
	var $contactLink = $('#contactLink');
	var $contactPane = $('.contact');
	var $aboutLink = $('#aboutLink');
	var $aboutPane = $('.about');
	var $closeButton = $('.close-footer');

	$contactLink.click(function() {
		$aboutPane.hide();
		$contactPane.show();
		showFooter();
	});

	$aboutLink.click(function() {
		$contactPane.hide();
		$aboutPane.show();
		showFooter();
	});

	$closeButton.click(function() {
		$body.removeClass('no-scroll');
		$aboutPane.hide();
		$contactPane.hide();
		$closeButton.hide();
		$footer.css({'top': 'auto'});
	});

	function showFooter() {
		$body.addClass('no-scroll');
		$closeButton.show();
		$footer.css({'top': '130px'});
	}

});
