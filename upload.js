let queuedImagesArray = [],
  savedForm = document.querySelector("#saved-form"),
  queuedForm = document.querySelector("#queued-form"),
  savedDiv = document.querySelector(".saved-div"),
  queuedDiv = document.querySelector(".queued-div"),
  inputDiv = document.querySelector(".input-div"),
  input = document.querySelector(".input-div input"),
  serverMessage = document.querySelector(".server-message"),
  deleteImages = [];

// QUEUED IN FRONTEND IMAGES
input.addEventListener("change", () => {
  const files = input.files;
  for (let i = 0; i < files.length; i++) {
    queuedImagesArray.push(files[i]); 
  }
  queuedForm.reset();
  displayQueuedImages();
});

inputDiv.addEventListener("drop", (e) => {
  e.preventDefault();
  const files = e.dataTransfer.files;
  for (let i = 0; i < files.length; i++) {
    if (!files[i].type.match("image")) continue;

    if (queuedImagesArray.every((image) => image.name !== files[i].name))
      queuedImagesArray.push(files[i]);
  }
  displayQueuedImages();
});

function displayQueuedImages() {
  let images = "";
  queuedImagesArray.forEach((image, index) => {
    images += `<div class="image">
                 <img src="${URL.createObjectURL(image)}" alt="image">
                   <span onclick="deleteQueuedImage(${index})">&times;</span>
              </div>`;
  })
  console.log(queuedDiv.innerHTML = images);

}

function deleteQueuedImage(index){
    queuedImagesArray.splice(index, 1)
    displayQueuedImages()
}

queuedForm.addEventListener("submit", (e) => {
    e.preventDefault();
    sendQueuedImagesToServer();
});

function sendQueuedImagesToServer() {
    const formData = new FormData(queuedForm);

    queuedImagesArray.forEach((image, index) => {
        formData.append(`file[${index}]`, image);
    });

    fetch('your_server_endpoint.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        serverMessage.innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
        serverMessage.innerHTML = 'An error occurred while uploading images.';
    });
}

const uploadButton = document.getElementById("upload");
uploadButton.addEventListener("click", () => {
    queuedForm.submit();
});


