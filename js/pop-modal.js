const modal = document.getElementById("modal");
const btnOpenModal = document.querySelectorAll("#open-modal, #open-modal2");
const closeBtn = document.getElementsByClassName("close")[0];

btnOpenModal.forEach(function (btn) {
  btn.onclick = function () {
    modal.style.display = "block";
  }
});

closeBtn.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
