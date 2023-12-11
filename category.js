const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");
let page = 1;
let limit = 3;

categories.addEventListener("change", () => {

  let start = limit * (page - 1);
  let end = limit * page - 1;
  let totalItem = 0;

  const categoryValue = categories.value.toUpperCase();

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
});

// changePage(page);
// function loadCount(){
//   let start = limit * (page - 1);
//   let end = limit * page - 1;
//   showcase.forEach((item, index) => {
//     if (index >= start && index <= end) {
//       item.style.display = "block";
//     } else {
//       item.style.display = "none";
//     }
//   });
//   listPage(showcase);
// }
// loadCount();

// function listPage(listofShowCase){
//   pageUI.innerHTML = "";
//   let count = Math.ceil(listofShowCase.length / limit);

//   let goToStart = document.createElement('li');
//   goToStart.innerHTML = "<<";
//   goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
//   goToStart.setAttribute("onclick","changePage(1)");
//   pageUI.appendChild(goToStart);

//   let prev = document.createElement('li');
//   prev.innerHTML = "<";
//   prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
//   if(page > 1){
//     prev.setAttribute("onclick","changePage(" + (page - 1) +")");
//   }
//   pageUI.appendChild(prev);

//   for(let i =1; i <= count; i++){
//     let newPage = document.createElement('li');
//     newPage.innerHTML = i;
//     if(i === page){
//       newPage.classList.add("active");
//     }
//     newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
//     newPage.setAttribute("onclick","changePage(" + i +")");
//     pageUI.appendChild(newPage);
//   }

//   let next = document.createElement('li');
//   next.innerHTML = ">";
//   next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
//   if(page < count){
//     next.setAttribute("onclick","changePage(" + (page + 1) +")");
//   }
//   pageUI.appendChild(next);

//   let goToEnd = document.createElement('li');
//   goToEnd.innerHTML = ">>";
//   goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "px-6", "py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
//   goToEnd.setAttribute("onclick","changePage(" + count + ")");
//   pageUI.appendChild(goToEnd);
// }

// function changePage(pageNumber){
//   page = pageNumber;
//   loadCount();
// }

// categories.addEventListener('change', () => {
//   showcase.forEach((item, index) => {
//     item.style.display = "block"
//   });
// });
