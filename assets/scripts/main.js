(function(){
	var config = {
		client_id: '9f21aed56edd46619626d932ed574379',
		access_token: '681423320.9f21aed.c832aa978af342a1a15316919bf8287b',
		user_id: '1681423320',
		scope: ['basic']
	};

	$.ajax({
		method: 'GET',
		url: 'https://api.instagram.com/v1/users/' + config.user_id + '/media/recent/?client_id=' + config.client_id,
	}).done(function(data) {
		console.log(data);
	});

})();
