const slides = document.getElementsByClassName("slide");
const sliderPagination = document.getElementById("sliderPagination");
const slideMovers = document.getElementsByClassName("move--button");
for (let i = 0; i < slides.length; i++) {
	sliderPagination.innerHTML += `<div class="dot" onclick="currentSlide(${
		i + 1
	})"></div>`;
}
if (slides.length <= 1) {
	for (const slideMover of slideMovers) {
		slideMover.style.display = "none";
	}
}

const showSlides = (n) => {
	let slides = document.getElementsByClassName("slide");
	let dots = document.getElementsByClassName("dot");
	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}

	for (const slide of slides) {
		slide.style.display = "none";
	}
	for (const dot of dots) {
		dot.className = dot.className.replace(" active", "");
	}
	slides[slideIndex - 1].style.display = "flex";
	dots[slideIndex - 1].classList.toggle("active");
};

// const autoMoveSlides = () => {
// 	let i;
// 	let slides = document.getElementsByClassName("blog--container");
// 	let dots = document.getElementsByClassName("dot");
// 	for (i = 0; i < slides.length; i++) {
// 		slides[i].style.display = "none";
// 	}
// 	slideIndex++;
// 	if (slideIndex > slides.length) {
// 		slideIndex = 1;
// 	}
// 	for (i = 0; i < dots.length; i++) {
// 		dots[i].className = dots[i].className.replace(" active", "");
// 	}
// 	slides[slideIndex - 1].style.display = "flex";
// 	dots[slideIndex - 1].classList.toggle("active");
// 	setTimeout(autoMoveSlides, 5000);
// };

const currentSlide = (n) => {
	showSlides((slideIndex = n));
};

let slideIndex = 1;
showSlides(slideIndex);
// autoMoveSlides();

const moveSlides = (n) => {
	showSlides((slideIndex += n));
};
