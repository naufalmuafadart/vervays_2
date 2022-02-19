const userSection = document.getElementById("user-sec");
const dropdownMenu = document.getElementById("dropdown-menu");
const pageHeader = document.getElementById("page-header");

userSection.addEventListener('mouseenter', () => {
  const currentDisplay = dropdownMenu.style.display;
  console.log(currentDisplay);
  if (currentDisplay == "") {
    dropdownMenu.style.display = "block";
  }
});

pageHeader.addEventListener('mouseleave', () => {
  const currentDisplay = dropdownMenu.style.display;
  if (currentDisplay == "block") {
    dropdownMenu.style.display = "";
  }
});