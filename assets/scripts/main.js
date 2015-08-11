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
		console.log(template);

		Mustache.parse(template);

		var rendered = Mustache.render(template, data);
	  $id.replaceWith(rendered);
	});

});
