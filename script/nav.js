// Get all sections that have an ID defined
const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  let scrollY = window.pageYOffset;
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 500;
    sectionId = current.getAttribute("id");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".navbar-collapse a[href*=" + sectionId + "]")
        .classList.add("gradient-box");
    } else {
      document
        .querySelector(".navbar-collapse a[href*=" + sectionId + "]")
        .classList.remove("gradient-box");
    }
  });
}
