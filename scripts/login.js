
function check_chars(text) {
	let arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '_'];
	if (text === "") {
		return "empty";
	}
	for (i = 0; i < text.length; i++) {
		let char = text.charAt(i);
		if (arr.indexOf(char) === -1) {
			return char;
		}
	}
	return "success";
}

function check_len_text(text, number) {
	if (text.length >= number) {
		return 'success';
	}
	return number;
}

// console.log(check_len_text("387gbfebwwwww", 10));


function login() {
	let do_login       = true;
	let username       = document.getElementById("login_username").value;
	let password       = document.getElementById("login_password").value;
	let username_chars = check_chars(username);
	let username_len   = check_len_text(username, 5);
	// let password_chars = check_chars(password);
	let password_len   = check_len_text(password, 8);
	if (username_len !== 'success') {
		do_login = false;
		document.getElementById('alert_username').innerHTML = 'نام کاربی باید حداقل ' + username_len + " کاراکتر داشته باشد";
		// let span    = document.createElement("span");
		// span.innerHTML = 'طول نام کاربری باید بیشتر از  ' + username_len + "اشد";
		// let element = document.getElementById('alert_username');
		// element.appendChild(span);
	}
	else if (username_chars !== 'success') {
		do_login = false;
		document.getElementById('alert_username').innerHTML = "از کاراکتر (\"" + username_chars + "\") در نام کاربری استفاده نکنید";
	}
	if (password_len !== 'success') {
		do_login = false;
		document.getElementById("alert_password").innerHTML = "پسورد باید حداقل  " + password_len + " کاراکتر داشته باشد";
	}
	// if (do_login) {
	// 	// post('http://127.0.0.1/shop_pixel/controllers/login.php', {'username':username, 'password':password});
	// }
	// console.log(password);
	return do_login;

}

function register() {

}

function look_l_password() {
	let pass = document.getElementById('login_password');
	if (pass.type == 'password') {
		pass.type = 'text';
	} else {
		pass.type = 'password';
	}
}

function look_r_password() {
	let pass_1 = document.getElementById('register_password_1');
	let pass_2 = document.getElementById('register_password_2');
	if (pass_1.type == 'password') {
		pass_1.type = 'text';
		pass_2.type = 'text';
	} else {
		pass_1.type = 'password';
		pass_2.type = 'password';
	}
}

function btn_login() {
	let div = document.getElementById('login');
	if (div.style.display === 'none') {
		div.style.display = 'block';
	} else {
		div.style.display = 'none';
	}
}

function btn_register() {
	let div = document.getElementById('register');
	if (div.style.display === 'none') {
		div.style.display = 'block';
	} else {
		div.style.display = 'none';
	}
}