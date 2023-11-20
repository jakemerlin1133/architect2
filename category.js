const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");

const emptybox = [];
let index = 1;
let showcasePerPage = 6;

categories.addEventListener("change", () => {
  const categoriesValue = categories.value.toUpperCase();
  let totalShowcase = 0;

  for (let i = 0; i < showcase.length; i++) {
    const categoryValue = showcase[i].querySelector("h2");

    if (categoriesValue === "ALL") {
      showcase[i].style.display = "block";
      totalShowcase ++;
    } else {
      if (categoryValue.innerHTML.toLocaleUpperCase().indexOf(categoriesValue) >- 1) {
        showcase[i].style.display = "block";
        totalShowcase ++;
      } else {
        showcase[i].style.display = "none";
      }
    }
  }
  loadCount(totalShowcase);
});

function loadCount(totalcount){
  showcasePerPage = Number(totalcount);
  console.log(showcasePerPage);
}



// const categories = document.querySelector("#categories");
// const container = document.querySelector("#container");
// const showcaseItems = container.querySelectorAll("#showcase");

// categories.addEventListener("change", () => {
//   let totalShowcaseForCategory = 0;
//   const categoriesValue = categories.value.toUpperCase();

//   for (let i = 0; i < showcaseItems.length; i++) {
//     const categoryValue = showcaseItems[i].querySelector("h2");
//     if (categoriesValue === "ALL") {
//       showcaseItems[i].style.display = "block";
//       totalShowcaseForCategory++;
//     } else {
//       if (categoryValue.innerHTML.toUpperCase().indexOf(categoriesValue) > -1) {
//         showcaseItems[i].style.display = "block";
//         totalShowcaseForCategory++;
//       } else {
//         showcaseItems[i].style.display = "none";
//       }
//     }
//   }
//   loadShowcase();
//   console.log(totalShowcaseForCategory);
// });

// // pagination of showcase

// let page = 1;
// let limit = 3;

// function loadShowcase(){
//   let begin = limit * (page - 1);
//   let end = limit * page - 1;
//   showcaseItems.forEach((showcase, index) => {
//     if(index >= begin && index <= end){
//       showcase.style.display = "block";
//     }else{
//       showcase.style.display = "none";
//     }
//   });
//   listPage();
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

// function changePage(i){
//   page = i;
//   loadShowcase();
// }
