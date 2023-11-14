const categories = document.querySelector("#categories");
const container = document.querySelector("#container");
const showcaseItems = container.querySelectorAll("#showcase");

let totalShowcaseForCategory = 0;
categories.addEventListener("change", () => {
  const categoriesValue = categories.value.toUpperCase();


  for (let i = 0; i < showcaseItems.length; i++) {
    const categoryValue = showcaseItems[i].querySelector("h2");
    if (categoriesValue === "ALL") {
      showcaseItems[i].style.display = "block";
    } else {
      if (categoryValue.innerHTML.toUpperCase().indexOf(categoriesValue) > -1) {
        showcaseItems[i].style.display = "block";
        totalShowcaseForCategory++;
      } else {
        showcaseItems[i].style.display = "none";
      }
    }
  }

});

// pagination of showcase
let page = 1;
let limit = 6;

function loadShowcase(){
  let begin = limit * (page - 1);
  let end = limit * page - 1;
  showcaseItems.forEach((showcase, index) => {
    if(index >= begin && index <= end){
      showcase.style.display = "block";
    }else{
      showcase.style.display = "none";
    }
  });
  listPage();
}
loadShowcase();

function listPage(){
  let count = Math.ceil(showcaseItems.length / limit);
  document.querySelector("#pagination").innerHTML = "";


  let GotoStart = document.createElement("li");
  GotoStart.innerText = "<<";
  GotoStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
  // GotoStart.setAttribute("onclick", "changePage(1)");
  pagination.appendChild(GotoStart);

}


function changePage(i){
  page = i;
  loadShowcase();
}