let queuedImagesArray = [],
  queuedForm = document.querySelector("#queued-form"),
  queuedDiv = document.getElementById("queued-images"); // Use getElementById to target queued-div

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

  // Add a change event listener to the file input
  const fileInput = document.querySelector('input[type="file"]');
  fileInput.addEventListener("change", () => {
    const files = fileInput.files;
    for (let i = 0; i < files.length; i++) {
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
    });
    queuedDiv.innerHTML = images; // Display images in the queued-div
  }