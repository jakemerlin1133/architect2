// add event of the burger/menu bar
const burger = document.querySelector("#burger");

burger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("active");
  document.querySelector("#burger").classList.toggle("active");
  document.querySelector("#contrast").classList.toggle("contrast-active");
});

// deactivate the sidebar
document.onclick = function (e) {
  if (e.target.id !== "sidebar" && e.target.id !== "burger") {
    document.querySelector("#contrast").classList.remove("contrast-active");
    document.querySelector("#sidebar").classList.remove("active");
    document.querySelector("#burger").classList.remove("active");
  }
};
// activate the design of the navigator link
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("header ul#pc-header a").
forEach(link => {
  if (activePage === '/architect2/' || activePage === '/architect2/index.php') {
    if (link.href.endsWith('index.php')) {
        link.classList.add('active');
    }
} else if (link.href.endsWith(activePage)) {
    link.classList.add('active');
}
});

// change the color when scroll
window.addEventListener("scroll", function(){
    var header = document.querySelector("#header-pc");
    header.classList.toggle("sticky", window.scrollY > 12);
});

// activate the design of the navigator link of the sidebar
const activePageSidebar = window.location.pathname;
const navLinksSidebar = document.querySelectorAll("#sidebar a").
forEach(link => {
  if (activePageSidebar === '/architect2/' || activePageSidebar === '/architect2/index.php') {
    if (link.href.endsWith('index.php')) {
        link.classList.add('active');
        console.log(activePageSidebar);
    }
} else if (link.href.endsWith(activePageSidebar)) {
    link.classList.add('active');
    console.log(activePageSidebar);
}
});


