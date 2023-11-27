//DOM Variables
const overlay = document.getElementById("overlay");
const changePasswordBtn = document.getElementById("changePasswordBtn");
const changePasswordCloseBtn = document.getElementById(
	"changePasswordCloseBtn"
);
const deleteAccountBtn = document.getElementById("deleteAccountBtn");
const deleteAccountCloseBtn = document.getElementById("deleteAccountCloseBtn");

//Form DOM variables
const changePasswordBox = document.getElementById("changePasswordBox");
const deleteAccountBox = document.getElementById("deleteAccountBox");

changePasswordBtn.addEventListener("click", (e) => {
	showBox(changePasswordBox);
});
changePasswordCloseBtn.addEventListener("click", (e) => {
	closeBox(changePasswordBox);
});
deleteAccountBtn.addEventListener("click", (e) => {
	showBox(deleteAccountBox);
});
deleteAccountCloseBtn.addEventListener("click", (e) => {
	closeBox(deleteAccountBox);
});

const showBox = (formBox) => {
	overlay.style.display = "flex";
	setTimeout(() => {
		overlay.style.backgroundColor = "var(--secondary-color__blur)";
	}, 100);
	if (formBox.classList.contains("hidden")) {
		formBox.classList.toggle("hidden");
	} else {
		formBox.classList.toggle("slideUp");
	}
	formBox.classList.toggle("slideDown");
};
const closeBox = (formBox) => {
	overlay.style.backgroundColor = "transparent";
	formBox.classList.toggle("slideDown");
	formBox.classList.toggle("slideUp");
	setTimeout(() => {
		overlay.style.display = "none";
		formBox.classList.toggle("slideUp");
		formBox.classList.toggle("hidden");
	}, 350);
};
