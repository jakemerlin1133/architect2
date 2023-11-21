const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");
var page = 2;

showcase.forEach((item, index) => {
  if (index >= 0 && index <= 5) {
    item.style.display = "block";
  } else {
    item.style.display = "none";
  }
});

function pages(){
categories.addEventListener("change", () => {
  const categoriesValue = categories.value.toUpperCase();
  let limit = 6;

  let begin = limit * (page - 1);
  let end = limit * page - 1;
  let totalItem = 0;

  showcase.forEach((showcase, index) => {
    const h2 = showcase.querySelector("h2").innerText.toUpperCase();
    if (categoriesValue === h2 || categoriesValue === "ALL") {
      if (totalItem >= begin && totalItem <= end) {
        showcase.style.display = "block";
      } else {
        showcase.style.display = "none";
      }
      totalItem++;
    } else {
      showcase.style.display = "none";
    }
  });
  loadCount(totalItem, limit);
});
}
function loadCount(totalcount, limit){
  showcasePerPage = Number(totalcount);
  listPage(showcasePerPage, limit);

}
// // // pagination of showcase
function listPage(totalItem, limit){
  document.querySelector("#pagination").innerHTML = "";
  let pagination = document.querySelector("#pagination");
  let count = Math.ceil( totalItem / limit);
  pageCount(count);
}

function pageCount (totalPage){
  for(let i = 1; i <= totalPage; i++){
    let newPage = document.createElement('li');
    newPage.innerText = i;
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
    newPage.setAttribute("onclick","changePage(" + i +")");
    pagination.appendChild(newPage);
}
}

function changePage(i){
  page = i;
  pages();
  console.log(page);
}

pages();




