let add = document.querySelector(".overlay");
let button = document.querySelector(".button_x");
let addStudent = document.querySelector(".addStudent")

button.addEventListener("click", hide);

function hide() {
  add.style.display = "none";
}

addStudent.addEventListener("click", function() {
  add.style.display = "block";
  document.querySelectorAll(".input").forEach(input => input.value = "")
})

document.addEventListener("DOMContentLoaded", function() {
  let getExist = document.location.href.split("?")[1] || null;

  if (getExist) {
    add.style.display = "block";
  }
})