var navbarToggler = document.querySelector('.navbar-toggler'); // Lấy phần tử toggler
var navbarCollapse = document.querySelector('.navbar-collapse'); // Lấy phần tử collapse

document.addEventListener('touchstart', function (event) { // Thêm sự kiện touchstart vào document
  if (!navbarCollapse.contains(event.target) && // Kiểm tra xem target của sự kiện có thuộc collapse hay không
    !navbarToggler.contains(event.target)) { // Kiểm tra xem target của sự kiện có thuộc toggler hay không
    navbarCollapse.classList.remove('show'); // Ẩn menu bằng cách xóa lớp "show"
  }
});


const buttons = document.querySelectorAll('.btn-project');
const sliders = document.querySelectorAll('.contain-blk');

// Hide all sliders except the first one
for (let i = 1; i < sliders.length; i++) {
  sliders[i].style.display = 'none';
}

// Add click event listeners to all buttons
buttons.forEach((button, index) => {
  button.addEventListener('click', () => {
    // Hide all sliders
    sliders.forEach(slider => slider.style.display = 'none');

    // Show the slider that matches the button's index
    const sliderToShow = document.querySelector(`#slide${index + 1}`);
    sliderToShow.style.display = 'block';
  });
});
