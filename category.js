// Queryselector
const container = document.querySelector("#container");
const pageUI = document.querySelector("#pagination");
const categories = document.querySelector("#categories");
const showcase = container.querySelectorAll("#showcase");

// variables for page, limit and count
let page = 1;
let limit = 6;
let count = Math.ceil(showcase.length / limit);
let start = limit * (page - 1);
let end = limit * page - 1;

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
goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
// Add a click event listener to the li element
goToStart.addEventListener("click", function() {
if(page != 1){

  // Scroll to the top of the page
    window.scrollTo({
      top: 0,
      behavior: "smooth" // Optional: Add smooth scrolling effect
    });

    // Call the changePage function with page number 1
    changePage(1);
  }
});
pageUI.appendChild(goToStart);

let prev = document.createElement('li');
prev.innerHTML = "<";
prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
prev.addEventListener("click", function() {
if(page > 1){

    // Scroll to the top of the page
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Optional: Add smooth scrolling effect
    });

        // Call the changePage function with page number 1
        changePage(page - 1);
  }
});
pageUI.appendChild(prev);  

for(let i = startPage; i <= endPage; i++){
let newPage = document.createElement('li');
newPage.innerHTML = i;
if(i === page){
  newPage.classList.add("active");
}
newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
newPage.addEventListener("click", function() {
  // Call the changePage function with page number 1
  if (!this.classList.contains('active')) {

  // Scroll to the top of the page
  window.scrollTo({
      top: 0,
      behavior: "smooth" // Optional: Add smooth scrolling effect
  });

  changePage(i);
}
});
pageUI.appendChild(newPage);
}

let next = document.createElement('li');
next.innerHTML = ">";
next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
next.addEventListener("click", function() {
    if(page < count){
    // Scroll to the top of the page
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Optional: Add smooth scrolling effect
    });

        // Call the changePage function with page number 1
        changePage(page + 1);
  }
  });
pageUI.appendChild(next);

let goToEnd = document.createElement('li');
goToEnd.innerHTML = ">>";
goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
goToEnd.addEventListener("click", function() {
  if(page != count){
  // Scroll to the top of the page
  window.scrollTo({
      top: 0,
      behavior: "smooth" // Optional: Add smooth scrolling effect
  });

    // Call the changePage function with page number 1
    changePage(count);
}
});
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
    goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    // Add a click event listener to the li element
    if(page != 1){
      goToStart.addEventListener("click", function() {
      
        // Scroll to the top of the page
          window.scrollTo({
            top: 0,
            behavior: "smooth" // Optional: Add smooth scrolling effect
          });

        // Call the changePage function with page number 1
        changePagePerCat(1);
      });
      }
    pageUI.appendChild(goToStart);
    
    let prev = document.createElement('li');
    prev.innerHTML = "<";
    prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    prev.addEventListener("click", function() {
        if(page > 1){
        // Scroll to the top of the page
        window.scrollTo({
            top: 0,
            behavior: "smooth" // Optional: Add smooth scrolling effect
        });
                // Call the changePage function with page number 1
                changePagePerCat(page - 1);
              }
      });
    pageUI.appendChild(prev);  

  for(let i = startPageInCat; i <= endPageInCat; i++){
    let newPage = document.createElement('li');
    newPage.innerHTML = i;
    if(i === page){
      newPage.classList.add("active");
    }
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    newPage.addEventListener("click", function() {
      // Call the changePage function with page number 1
      if (!this.classList.contains('active')) {
    
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
    
      changePagePerCat(i);
    }
    });
    pageUI.appendChild(newPage);
  }

  let next = document.createElement('li');
    next.innerHTML = ">";
    next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    next.addEventListener("click", function() {
      if(page < countPerCat){
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
  
          // Call the changePage function with page number 1
          changePage(page + 1);
    }
    });
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.addEventListener("click", function() {
      if(page != count){
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
    
        // Call the changePage function with page number 1
        changePagePerCat(countPerCat);
    }
    });
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
  goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
// Add a click event listener to the li element
goToStart.addEventListener("click", function() {
  if(page != 1){
  
    // Scroll to the top of the page
      window.scrollTo({
        top: 0,
        behavior: "smooth" // Optional: Add smooth scrolling effect
      });
  
      // Call the changePage function with page number 1
      changePage(1);
    }
  });
  pageUI.appendChild(goToStart);
  
  let prev = document.createElement('li');
  prev.innerHTML = "<";
  prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  prev.addEventListener("click", function() {
    if(page > 1){
    
        // Scroll to the top of the page
        window.scrollTo({
            top: 0,
            behavior: "smooth" // Optional: Add smooth scrolling effect
        });
    
            // Call the changePage function with page number 1
            changePage(page - 1);
      }
    });
  pageUI.appendChild(prev);

  for(let i =startPage; i <= endPage; i++){
    let newPage = document.createElement('li');
    newPage.innerHTML = i;
    if(i === page){
      newPage.classList.add("active");
    }
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    newPage.addEventListener("click", function() {
      // Call the changePage function with page number 1
      if (!this.classList.contains('active')) {
    
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
    
      changePage(i);
    }
    });
    pageUI.appendChild(newPage);
  }

  let next = document.createElement('li');
    next.innerHTML = ">";
    next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    next.addEventListener("click", function() {
      if(page < count){
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
  
          // Call the changePage function with page number 1
          changePage(page + 1);
    }
    });
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.addEventListener("click", function() {
      if(page != count){
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
    
        // Call the changePage function with page number 1
        changePage(count);
    }
    });
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

  // loop and print the different pages
  let goToStart = document.createElement('li');
  goToStart.innerHTML = "<<";
  goToStart.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
// Add a click event listener to the li element
goToStart.addEventListener("click", function() {
  if(pageInCat != 1){
  
    // Scroll to the top of the page
      window.scrollTo({
        top: 0,
        behavior: "smooth" // Optional: Add smooth scrolling effect
      });
  
      // Call the changePage function with page number 1
      changePagePerCat(1);
    }
  });
  pageUI.appendChild(goToStart);
  
  let prev = document.createElement('li');
  prev.innerHTML = "<";
  prev.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
  prev.addEventListener("click", function() {
    if(pageInCat > 1){
    
        // Scroll to the top of the page
        window.scrollTo({
            top: 0,
            behavior: "smooth" // Optional: Add smooth scrolling effect
        });
    
            // Call the changePage function with page number 1
            changePagePerCat(pageInCat - 1);
      }
    });
  pageUI.appendChild(prev);

  for(let i = startPagePerCat2; i <= endPageInCat2; i++){
    let newPage = document.createElement('li');
    newPage.innerHTML = i;
    if(i === pageInCat){
      newPage.classList.add("active");
    }
    newPage.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    newPage.addEventListener("click", function() {
      // Call the changePage function with page number 1
      if (!this.classList.contains('active')) {
    
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
    
      changePagePerCat(i);
    }
    });
    pageUI.appendChild(newPage);
  }

  let next = document.createElement('li');
    next.innerHTML = ">";
    next.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    next.addEventListener("click", function() {
      if(pageInCat < countPerCategory){
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
  
          // Call the changePage function with page number 1
          changePagePerCat(pageInCat + 1);
    }
    });
    pageUI.appendChild(next);
  
    let goToEnd = document.createElement('li');
    goToEnd.innerHTML = ">>";
    goToEnd.classList.add("font-normal", "text-gray-400", "border-[2px]", "border-gray-300", "max-[320px]:px-1.5", "max-[320px]:py-0", "min-[320px]:px-1.5", "min-[320px]:py-0", "min-[370px]:px-2", "min-[370px]:py-0", "min-[435px]:px-3", "min-[435px]:py-1", "min-[510px]:px-4", "min-[510px]:py-1.5", "min-[580px]:px-5", "min-[580px]:py-2.5", "min-[660px]:px-6", "min-[660px]:py-4", "mx-1", "shadow-md", "hover:text-white", "hover:bg-slate-800", "cursor-pointer");
    goToEnd.addEventListener("click", function() {
      if(pageInCat != countPerCategory){
      // Scroll to the top of the page
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Optional: Add smooth scrolling effect
      });
    // 
        // Call the changePage function with page number 1
        changePagePerCat(countPerCategory);
    }
    });
    pageUI.appendChild(goToEnd);
  });
}


