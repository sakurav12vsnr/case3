const fileSelect = document.getElementById("ImageUploadButton");
const fileElem = document.getElementById("ImageUpload");

fileSelect.addEventListener("click", (e) => {
  if (fileElem) {
    fileElem.click();
  }
}, false);