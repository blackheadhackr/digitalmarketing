/**
 * SCROLL TOP
 */

const scrollTop = document.querySelector(".scroll__top");
if (scrollTop) {
  const togglescrollTop = function () {
    window.scrollY > 100
      ? scrollTop.classList.add("active")
      : scrollTop.classList.remove("active");
  };
  window.addEventListener("load", togglescrollTop);
  document.addEventListener("scroll", togglescrollTop);
  scrollTop.addEventListener(
    "click",
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    })
  );
}




/**
 * NAVBAR BUTTON
 */
function myFunction(x) {
  x.classList.toggle("change");
}