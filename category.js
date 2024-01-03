// Queryselector
const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");

// variables for page, limit and count
let page = 1;
let limit = 4;
let start = limit * (page - 1);
let end = limit * page - 1;
let count = Math.ceil(showcase.length / limit);

let visiblePages = 4;
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

  for(let i = 1; i <= countPerCat; i++){
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
    goToEnd.setAttribute("onclick", "changePage(" + endPage +")");
    pageUI.appendChild(goToEnd);
  });
}


function changePagePerCat(i){
  page = i
  let start = (limit * (page - 1));
  let end = limit * page - 1;
  let totalItem = 0;
  let visiblePagesperCat = 4;
  let startPageperCat = Math.max(1, page - Math.floor(visiblePagesperCat / 2));
  let endPageperCat = Math.min(startPageperCat + visiblePagesperCat - 1, count);
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
  goToStart.setAttribute("onclick","changePagePerCat(1)");
  pageUI.appendChild(goToStart);
  
  let prev = document.createElement('li');
  prev.innerHTML = "<";
  prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  if(page > 1){
    prev.setAttribute("onclick","changePagePerCat(" + (page - 1) +")");
  }
  pageUI.appendChild(prev);

  for(let i = startPageperCat; i <= endPageperCat; i++){
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
    if(page < count){
      next.setAttribute("onclick","changePagePerCat(" + (page + 1) +")");
    }
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.setAttribute("onclick", "changePagePerCat(" + count +")");
    pageUI.appendChild(goToEnd);
  });
}


