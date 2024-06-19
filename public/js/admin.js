const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", function () {
    allSideMenu.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

//Filter
const startDate = document.querySelector('input[name="start_date"]').value;
const endDate = document.querySelector('input[name="end_date"]').value;
const btnDefault = document.getElementById("btnDefault");

if (startDate && endDate) {
  btnDefault.style.display = "block";
} else {
  btnDefault.style.display = "none";
}
