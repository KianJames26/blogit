const fileInput = document.getElementById("profile_picture");
const imagePreview = document.getElementById("imagePreview");
const currentImage = document.getElementById("currentImage");
const fileName = document.getElementById("fileName");
const removeUpload = document.getElementById("removeUpload");

const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.tiff|\.tif)$/i;
let previousFile;

fileInput.addEventListener("change", (e) => {
	if (!allowedExtensions.exec(fileInput.files[0].name)) {
		alert("Only file with .jpg, .jpeg, .png, .tiff, and .tif will be accepted");
		if (e.target.value) {
			const dataTransfer = new DataTransfer();
			dataTransfer.items.add(previousFile);
			e.target.files = dataTransfer.files;
		} else {
			e.target.value = "";
		}
	}
	previewImage();
});

removeUpload.addEventListener("click", (e) => {
	fileInput.value = "";
	previewImage();
});

const previewImage = () => {
	previousFile = fileInput.files[0];
	if (fileInput.value) {
		currentImage.style.display = "none";
		imagePreview.style.display = "block";
		removeUpload.style.display = "block";
		fileName.innerHTML = fileInput.files[0].name;
		imagePreview.src = URL.createObjectURL(fileInput.files[0]);
	} else {
		currentImage.style.display = "";
		imagePreview.style.display = "none";
		removeUpload.style.display = "none";
		fileName.innerHTML = "No file chosen";
		imagePreview.src = "";
	}
	console.log(fileInput.files);
};
