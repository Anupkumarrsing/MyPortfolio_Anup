// header scroll

let nav=document.querySelector(".navbar");
window.onscroll=function(){
    if (document.documentElement.scrollTop>20){
        nav.classList.add("header-scrolled");
    }else{
        nav.classList.remove("header-scrolled");
    }
}


// nav hide
// let navBar=document.querySelectorAll(".nav-link");
// let navCollapse=document.querySelector(".navbar-collapse .collapse");
// navBar.forEach(function(a){
//     a.addEventListener("click",function(){
//         navCollapse.classList.remove("show");
//     })
// })
let navbarLinks = document.querySelectorAll('.nav-link'); // Line 1
let navCollapse = document.querySelector('.navbar-collapse'); // Line 2

navbarLinks.forEach(function (link) { // Line 3
    link.addEventListener("click", function () { // Line 4
        navCollapse.classList.remove("show"); // Line 5
    });
});


// Select the image element
const imgElement = document.querySelector('.hover-3d');

// Add mouseover event listener to apply the 3D effect
imgElement.addEventListener('mouseover', () => {
  imgElement.classList.add('active'); // Add the active class on hover
});

// Add mouseout event listener to remove the 3D effect
imgElement.addEventListener('mouseout', () => {
  imgElement.classList.remove('active'); // Remove the active class when not hovering
});


  


