// Queryselector
const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");

// variables for page, limit and count
let page = 1;
let limit = 6;
let start = limit * (page - 1);
let end = limit * page - 1;
let count = Math.ceil(showcase.length / limit);

let visiblePages = 5;
let startPage = Math.max(1, page - Math.floor(visiblePages / 2));
let endPage = Math.min(startPage + visiblePages - 1, count);

showcase.forEach((item, index) =>{
  if(index >= start && index <=end){
    item.style.display = "block";
  }else{
    item.style.display = "none";
  }
});

let goToStart = document.createElement('li');
goToStart.innerHTML = "<<";
goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
goToStart.setAttribute("onclick","changePage(1)");
pageUI.appendChild(goToStart);

let prev = document.createElement('li');
prev.innerHTML = "<";
prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
if(page > 1){
  prev.setAttribute("onclick","changePage(" + (page - 1) +")");
}
pageUI.appendChild(prev);  

for(let i = startPage; i <= endPage; i++){
let newPage = document.createElement('li');
newPage.innerHTML = i;
if(i === page){
  newPage.classList.add("active");
}
newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
newPage.setAttribute("onclick","changePage(" + i +")");
pageUI.appendChild(newPage);
}

let next = document.createElement('li');
next.innerHTML = ">";
next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
if(page < count){
  next.setAttribute("onclick","changePage(" + (page + 1) +")");
}
pageUI.appendChild(next);

let goToEnd = document.createElement('li');
goToEnd.innerHTML = ">>";
goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
goToEnd.setAttribute("onclick", "changePage(" + count +")");
pageUI.appendChild(goToEnd);

// Eventlistener of categories
categories.addEventListener("change", () => {
  page = 1;
  let start = limit * (page - 1);
  let end = limit * page - 1;
  let totalItem = 0;

  // Get the value of categories
  const categoryValue = categories.value.toUpperCase();

  // deploy each showcase
  showcase.forEach((item, index) => {
    const h2 = item.querySelector("h2").innerText.toUpperCase();

    if (categoryValue === h2 || categoryValue === "ALL") {
      if (totalItem >= start && totalItem <= end) {
        item.style.display = "block";
      }else{
        item.style.display = "none";
      }
      totalItem++;
    } else {
      item.style.display = "none";
    }
  });

  let countPerCat = Math.ceil(totalItem / limit);
  let startPageInCat = Math.max(1, page - Math.floor(visiblePages / 2));
  let endPageInCat = Math.min(startPageInCat + visiblePages - 1, countPerCat);

  // remove the existing page
  while (pageUI.firstChild) {
    pageUI.removeChild(pageUI.firstChild);
  }

  // loop and print the different pages
    let goToStart = document.createElement('li');
    goToStart.innerHTML = "<<";
    goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToStart.setAttribute("onclick","changePagePerCat(1)");
    pageUI.appendChild(goToStart);
    
    let prev = document.createElement('li');
    prev.innerHTML = "<";
    prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    if(page > 1){
      prev.setAttribute("onclick","changePagePerCat(" + (page - 1) +")");
    }
    pageUI.appendChild(prev);  

  for(let i = startPageInCat; i <= endPageInCat; i++){
    let newPage = document.createElement('li');
    newPage.innerHTML = i;
    if(i === page){
      newPage.classList.add("active");
    }
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    newPage.setAttribute("onclick","changePagePerCat(" + i +")");
    pageUI.appendChild(newPage);
  }

  let next = document.createElement('li');
    next.innerHTML = ">";
    next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    if(page < countPerCat){
      next.setAttribute("onclick","changePagePerCat(" + (page + 1) +")");
    }
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.setAttribute("onclick", "changePagePerCat(" + countPerCat +")");
    pageUI.appendChild(goToEnd);
});

function changePage(i){
  page = i
  let start = (limit * (page - 1));
  let end = limit * page - 1;
  let totalItem = 0;

  startPage = Math.max(1, page - Math.floor(visiblePages / 2));
  endPage = Math.min(startPage + visiblePages - 1, count);

  const categoryValue = categories.value.toUpperCase();

  showcase.forEach((item, index) => {
    const h2 = item.querySelector("h2").innerText.toUpperCase();

    if (categoryValue === h2 || categoryValue === "ALL") {
      if (totalItem >= start && totalItem <= end) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
      totalItem++;
    } else {
      item.style.display = "none";
    }

    let count = Math.ceil(totalItem / limit);

  // remove the existing page
  while (pageUI.firstChild) {
    pageUI.removeChild(pageUI.firstChild);
  }

  // loop and print the different pages
  let goToStart = document.createElement('li');
  goToStart.innerHTML = "<<";
  goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  goToStart.setAttribute("onclick","changePage(1)");
  pageUI.appendChild(goToStart);
  
  let prev = document.createElement('li');
  prev.innerHTML = "<";
  prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  if(page > 1){
    prev.setAttribute("onclick","changePage(" + (page - 1) +")");
  }
  pageUI.appendChild(prev);

  for(let i =startPage; i <= endPage; i++){
    let newPage = document.createElement('li');
    newPage.innerHTML = i;
    if(i === page){
      newPage.classList.add("active");
    }
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    newPage.setAttribute("onclick","changePage(" + i +")");
    pageUI.appendChild(newPage);
  }

  let next = document.createElement('li');
    next.innerHTML = ">";
    next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    if(page < count){
      next.setAttribute("onclick","changePage(" + (page + 1) +")");
    }
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.setAttribute("onclick", "changePage(" + count +")");
    pageUI.appendChild(goToEnd);
  });
}


function changePagePerCat(i){
  let pageInCat = i
  let start = (limit * (pageInCat - 1));
  let end = limit * pageInCat - 1;
  let totalItem = 0;

  const categoryValue = categories.value.toUpperCase();

  showcase.forEach((item, index) => {
    const h2 = item.querySelector("h2").innerText.toUpperCase();

    if (categoryValue === h2 || categoryValue === "ALL") {
      if (totalItem >= start && totalItem <= end) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
      totalItem++;
    } else {
      item.style.display = "none";
    }

  // remove the existing page
  while (pageUI.firstChild) {
    pageUI.removeChild(pageUI.firstChild);
  }

  let countPerCategory = Math.ceil(totalItem / limit);
  let startPagePerCat2 = Math.max(1, pageInCat - Math.floor(visiblePages / 2));
  let endPageInCat2 = Math.min(startPagePerCat2 + visiblePages - 1, countPerCategory);
  console.log(countPerCategory);

  // loop and print the different pages
  let goToStart = document.createElement('li');
  goToStart.innerHTML = "<<";
  goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  goToStart.setAttribute("onclick","changePagePerCat(1)");
  pageUI.appendChild(goToStart);
  
  let prev = document.createElement('li');
  prev.innerHTML = "<";
  prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  if(pageInCat > 1){
    prev.setAttribute("onclick","changePagePerCat(" + (pageInCat - 1) +")");
  }
  pageUI.appendChild(prev);

  for(let i = startPagePerCat2; i <= endPageInCat2; i++){
    let newPage = document.createElement('li');
    newPage.innerHTML = i;
    if(i === pageInCat){
      newPage.classList.add("active");
    }
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    newPage.setAttribute("onclick","changePagePerCat(" + i +")");
    pageUI.appendChild(newPage);
  }

  let next = document.createElement('li');
    next.innerHTML = ">";
    next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    if(pageInCat < endPageInCat2){
      next.setAttribute("onclick","changePagePerCat(" + (pageInCat + 1) +")");
    }
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.setAttribute("onclick", "changePagePerCat(" + countPerCategory +")");
    pageUI.appendChild(goToEnd);
  });
}


