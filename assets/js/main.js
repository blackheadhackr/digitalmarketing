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





/**
 * ACCORDION
 */
const collapsibleButtons = document.querySelectorAll(
  ".collapsible-trigger-btn"
);

collapsibleButtons.forEach((collapsibleButton) => {
  const collapsibleContentDataHeight =
    collapsibleButton.nextElementSibling.offsetHeight;
  collapsibleButton.nextElementSibling.style.height = 0;
  collapsibleButton.addEventListener("click", (e) => {
    if (
      !e.currentTarget.parentElement.classList.contains("collapsible-tab__open")
    ) {
      e.currentTarget.parentElement.classList.toggle("collapsible-tab__open");
      e.currentTarget.nextElementSibling.style.height = `${collapsibleContentDataHeight}px`;
    } else {
      e.currentTarget.parentElement.classList.remove("collapsible-tab__open");
      e.currentTarget.nextElementSibling.style.height = 0;
    }
  });
});





