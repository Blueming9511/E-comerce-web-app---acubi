/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  const menu = document.getElementById("myDropdown");
  if (menu.style.display === "none") {
      menu.style.display = "block";
  } else {
      menu.style.display = "none";
  }}
  

// cart sock

const cart_icon = document.querySelector(".cart-icon");
cart_icon.addEventListener("click", () => {
  let cart_sock = document.querySelector(".cart-sock");
  cart_sock.classList.toggle("open");
});

const cart_close = document.querySelector("#cart-close");
cart_close.addEventListener("click", () => {
  let cart_sock = document.querySelector(".cart-sock");
  cart_sock.classList.remove("open");
});




const search_icon = document.querySelector(".search-icon");
search_icon.addEventListener("click", () =>{
  let search_wrapper = document.querySelector(".search-wrapper");
  search_wrapper.classList.toggle("open");
})

const search_icon_close = document.querySelector("#search-close");
search_icon_close.addEventListener("click", () =>{
  let search_wrapper = document.querySelector(".search-wrapper");
  search_wrapper.classList.toggle("open");
})