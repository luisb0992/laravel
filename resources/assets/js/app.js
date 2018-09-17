new Vue({
	el: '#login',
	data : {
		user : '',
		password: '',
	},
	methods : {
		login : function () {
				var url = window.routes.auth;
				//console.log(this.user);
				axios.post(url,{
					user:  this.user,
					password: this.password,
				}).then(response =>  {
					var status = response.data.status;

					if (status === true) {
						toastr.success('Inicio sesion correctamente');
						window.location.href = response.data.redirect;
					}else{
						toastr.error('¡Error!, Revise sus credenciales');
					}
					//console.log(response.data.status);
				});	
		}
	}
});


new Vue({
	el: '#app'
});