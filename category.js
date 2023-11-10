const categories = document.querySelector("#categories");

categories.addEventListener("change", () => {
  const categoriesValue = categories.value.toUpperCase();
  const container = document.querySelector("#container");
  const showcaseItems = container.querySelectorAll("#showcase");

  for (let i = 0; i < showcaseItems.length; i++) {
    const categoryValue = showcaseItems[i].querySelector("h2");
    if (categoriesValue === "ALL") {
      showcaseItems[i].style.display = "block";
    } else {
      if (categoryValue.innerHTML.toUpperCase().indexOf(categoriesValue) > - 1) {
        showcaseItems[i].style.display = "block";
      } else {
        showcaseItems[i].style.display = "none";
      }
    }
  } 
});
