const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}
closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.mod-modal')
    closeModal(modal)
  })
})

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.mod-modal')
    closeModal(modal)
  })
})
overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.mod-modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})




//Drop-Down Search
let form = document.getElementById('search-icon');
let searchBox = document.getElementById('search-box');

form.addEventListener('mouseenter', (e) => {
  e.preventDefault();
  searchBox.style.display = 'block';
});

searchBox.addEventListener('mouseleave', () => {
  setTimeout(function () {
      searchBox.style.display = 'none';
  }, 100);
});


const modal = document.getElementById("modal");
const btnOpenModal = document.getElementById("open-modal");
const closeBtn = document.getElementsByClassName("close")[0];

btnOpenModal.onclick = function() {
  modal.style.display = "block";
}

closeBtn.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}