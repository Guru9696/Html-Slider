// script.js

let index = 0;
const slides = document.querySelectorAll('.slider img');
const dots = document.querySelectorAll('.dot');
const totalSlides = slides.length;

function moveSlide(step) {
  index += step;

  if (index < 0) {
    index = totalSlides - 1;
  }
  if (index >= totalSlides) {
    index = 0;
  }

  updateSlider();
}

function currentSlide(n) {
  index = n - 1;
  updateSlider();
}

function updateSlider() {
  document.querySelector('.slider').style.transform = `translateX(-${index * 100}%)`;

  // Update the active dot
  dots.forEach((dot, i) => {
    if (i === index) {
      dot.classList.add('active');
    } else {
      dot.classList.remove('active');
    }
  });
}

// Automatic slide every 3 seconds
setInterval(() => {
  moveSlide(1);
}, 3000);

// Initialize the slider
updateSlider();
