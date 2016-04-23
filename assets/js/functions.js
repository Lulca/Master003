$(document).ready(function () {
	
	$('#application').validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},

			phone: {
				required: true,
				minlength: 10
			},

			mail: {
				required: true
			}
		},

		messages: {
			name: {
				required: 'Поле "Имя" обязательно для заполнения',
				minlength: 'Длинна имени должна быть не менее 2-х символов'
			},

			phone: {
				required: 'Поле "Телефон" обязательно для заполнения',
				minlength: 'Недостаточно цифр'
			},

			mail: {
				required: 'Поле "E-mail" обязательно для заполнения'
			}
		}
	});

	// $('.btn-submit').click(function() {
	// 	alert('heloo');
	// });

});