<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ronny - Вход</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
			integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="<?php echo ROOT_URL . '/layouts/auth'; ?>/style.css">

        <link rel="icon" type="image/png" href="graph.png" />
	</head>

	<body class="background-image">
		<div class="background-curtain">
			<div class="auth-container">
				<div class="auth-brand">
					<h1 class="auth-title">Mahorat.Tech</h1>
					<p class="auth-text">Вход в систему</p>
				</div>
				<div class="card" id="card"></div>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
			integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script src="/layouts/auth/v.js"></script>

		<script>
            let login_page = `<?php require 'auth/login.php'; ?>`;

            let card = document.getElementById('card');

            card.innerHTML = login_page;

            function switchTo(variable) {
                card.innerHTML = variable;
                validateRefresh();
            }

            validateRefresh();

			function togglePassword(input_id, icon_id) {
				let input = document.getElementById(input_id);
				let icon = document.getElementById(icon_id);

				if (input.getAttribute('type') == 'text') {
					input.setAttribute('type', 'password');
					icon.setAttribute('class', 'fa-regular fa-eye');
				} else {
					input.setAttribute('type', 'text');
					icon.setAttribute('class', 'fa-regular fa-eye-slash');
				}
			}

            function validateRefresh() {
                $('.form.login_form').validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        },
                    },
                    messages: {
                        email: {
                            required: 'Введите почту',
                            email: 'Введите правильную почту'
                        },
                        password: {
                            required: 'Введите пароль',
                            minlength: 'Пароль должен содержать не менее 6 символов'
                        },
                    }
                });

                $('.form.signup_form').validate({
                    rules: {
                        login: {
                            required: true,
                            minlength: 3
                        },
                        first_name: {
                            required: true,
                            minlength: 3
                        },
                        last_name: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        },
                        confirm_password: {
                            required: true,
                            equalTo: '#i5'
                        }
                    },
                    messages: {
                        login: {
                            required: 'Введите имя пользователя',
                            minlength: 'Имя пользователя должен содержать не менее 3 символов'
                        },
                        first_name: {
                            required: 'Введите имя',
                            minlength: 'Имя должен содержать не менее 3 символов'
                        },
                        last_name: {
                            required: 'Введите фамилию',
                            minlength: 'Фамилия должен содержать не менее 3 символов'
                        },
                        email: {
                            required: 'Введите почту',
                            email: 'Введите правильную почту'
                        },
                        password: {
                            required: 'Введите пароль',
                            minlength: 'Пароль должен содержать не менее 6 символов'
                        },
                        confirm_password: {
                            required: 'Подвердите пароль',
                            equalTo: 'Пароли не совпадают',
                        },
                    }
                });
            }
		</script>
	</body>

</html>