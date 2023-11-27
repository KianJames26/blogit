const previewImage = () => {
	const selectedImage = document.getElementById("selectedImage");
	if (fileInput.value) {
		dragZone.style.display = "none";
		imagePreview.style.display = "flex";
		selectedImage.src = URL.createObjectURL(fileInput.files[0]);
	} else {
		dragZone.style.display = "flex";
		imagePreview.style.display = "none";
	}
};

fileInput.addEventListener("change", (e) => {
	if (!allowedExtensions.exec(fileInput.files[0].name)) {
		alert("Only file with .jpg, .jpeg, .png, .tiff, and .tif will be accepted");
		if (fileInput.value) {
			const dataTransfer = new DataTransfer();
			dataTransfer.items.add(previousFile);
			fileInput.files = dataTransfer.files;
		} else {
			fileInput.value = "";
		}
	}
	previousFile = fileInput.files[0];
	previewImage();
});

const removePreview = () => {
	fileInput.value = "";
	previousFile = fileInput.files[0];
	previewImage();
};
