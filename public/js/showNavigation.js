const showNavigation = (navId, arrowId) => {
	const navBox = document.getElementById(navId);
	const arrow = document.getElementById(arrowId);

	if (navBox.classList.contains("hidden")) {
		navBox.classList.toggle("hidden");
		navBox.classList.toggle("show");
		arrow.classList.toggle("nav-opened");
	} else {
		navBox.classList.toggle("hide");
		navBox.classList.toggle("show");
		arrow.classList.toggle("nav-opened");
	}
};
