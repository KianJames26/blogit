const showPassword = (inputBoxId, showIconId) => {
	let passwordBox = document.getElementById(inputBoxId);
	let eyeImage = document.getElementById(showIconId);

	if (passwordBox.type === "password") {
		passwordBox.type = "text";
	} else {
		passwordBox.type = "password";
	}
	eyeImage.classList.toggle("bi-eye-slash-fill");
	eyeImage.classList.toggle("bi-eye-fill");
};
