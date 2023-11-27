const dragZone = document.getElementById("dragZone");
const fileInput = document.getElementById("image");
const fileIcon = document.querySelector(".bi-cloud-plus-fill");
const imagePreview = document.getElementById("imagePreview");

const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.tiff|\.tif)$/i;
let previousFile;

dragZone.addEventListener("dragover", (e) => {
	e.preventDefault();
	fileIcon.classList.add("bi-cloud-arrow-up-fill");
	fileIcon.classList.remove("bi-cloud-plus-fill");
});
dragZone.addEventListener("dragleave", (e) => {
	fileIcon.classList.add("bi-cloud-plus-fill");
	fileIcon.classList.remove("bi-cloud-arrow-up-fill");
});

dragZone.addEventListener("drop", (e) => {
	e.preventDefault();

	let files = e.dataTransfer.files;
	let dataTransfer = new DataTransfer();

	if (!allowedExtensions.exec(files[0].name)) {
		alert("Only file with .jpg, .jpeg, .png, .tiff, and .tif will be accepted");
		if (fileInput.value) {
			const dataTransfer = new DataTransfer();
			dataTransfer.items.add(previousFile);
			fileInput.files = dataTransfer.files;
		} else {
			fileInput.value = "";
		}
	} else {
		dataTransfer.items.add(files[0]);
		let filesToBeAdded = dataTransfer.files;
		fileInput.files = filesToBeAdded;
		console.log(fileInput.value);
	}

	previewImage();
	fileIcon.classList.add("bi-cloud-plus-fill");
	fileIcon.classList.remove("bi-cloud-arrow-up-fill");
});
