const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");
let page = 1;


showcase.forEach((item, index) => {
  if (index >= 0 && index <= 5) {
    item.style.display = "block";
  } else {
    item.style.display = "none";
  }
});

categories.addEventListener("change", () => {
  const categoriesValue = categories.value.toUpperCase();
  let limit = 6;

  let begin = limit * (page - 1);
  let end = limit * page - 1;
  let totalItem = 0;

  showcase.forEach((showcase) => {
    const h2 = showcase.querySelector("h2").innerText.toUpperCase();
    if (categoriesValue === h2 || categoriesValue === "ALL") {
      totalItem++;
      if ((totalItem -1) >= begin && (totalItem -1) <= end) {
        showcase.style.display = "block";
      } else {
        showcase.style.display = "none";
      }
    } else {
      showcase.style.display = "none";
    }
  });

  
  loadCount(totalItem, limit);
});

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

function changePage(Number){
  page = Number;
}



//   let BacktoStart = document.createElement('li');
//   BacktoStart.innerText = "<<";
//   BacktoStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   pagination.appendChild(BacktoStart);

//   let prev = document.createElement('li');
//   prev.innerText = "<";
//   prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   pagination.appendChild(prev);



//   let next = document.createElement('li');
//   next.innerText = ">";
//   next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   pagination.appendChild(next);

//   let GotoEnd = document.createElement('li');
//   GotoEnd.innerText = ">>";
//   GotoEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   pagination.appendChild(GotoEnd);
// }

// loadShowcase();

// function listPage(){
//   let count = Math.ceil(showcaseItems.length / limit);
//   document.querySelector("#pagination").innerHTML = "";
//   let pagination = document.querySelector("#pagination");

//   let GotoStart = document.createElement("li");
//   GotoStart.innerText = "<<";
//   GotoStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   GotoStart.setAttribute("onclick", "changePage(1)");
//   pagination.appendChild(GotoStart);

//   let prev = document.createElement("li");
//   prev.innerText = "<";
//   prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   if(page > 1){
//     prev.setAttribute("onclick", "changePage(" + (page - 1 ) + ")");
//   }
//   pagination.appendChild(prev);

//   for(let i = 1; i <= count; i++){
//     let newPage = document.createElement("li");
//     newPage.innerText = i;
//     newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//     if(i === page){
//       newPage.classList.add("active");
//     }
//     newPage.setAttribute("onclick", "changePage(" + i + ")");
//     pagination.appendChild(newPage);
//   }

//   let next = document.createElement("li");
//   next.innerText = ">";
//   next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   if(page < count){
//     next.setAttribute("onclick", "changePage(" + (page + 1 ) + ")");
//   }

//   pagination.appendChild(next);

//   let goToEnd = document.createElement("li");
//   goToEnd.innerText = ">>";
//   goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800");
//   goToEnd.setAttribute("onclick", "changePage(" + count + ")");
//   pagination.appendChild(goToEnd);
// }

