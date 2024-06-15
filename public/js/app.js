const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

window.addEventListener('load', () => {
  inputs.forEach((input) => {
    if (input.value !== "") {
      let parent = input.parentNode;
      parent.classList.add("focus");
    }
  });
});

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
