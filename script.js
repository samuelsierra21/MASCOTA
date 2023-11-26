const slider = document.querySelector('.slider');
const indicators = document.querySelectorAll('.indicator');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentIndex = 0;
let autoSlideInterval;
let autoSlideCountdown = 10; // Contador inicial para el cambio automático

function showSlide(index) {
    if (index < 0) {
        currentIndex = slider.children.length - 1;
    } else if (index >= slider.children.length) {
        currentIndex = 0;
    }

    slider.style.transform = `translateX(-${currentIndex * 100}%)`;

    indicators.forEach((indicator, i) => {
        if (i === currentIndex) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        autoSlideCountdown--;

        if (autoSlideCountdown <= 0) {
            currentIndex++;
            showSlide(currentIndex);
            autoSlideCountdown = 10; // Reiniciar la cuenta regresiva
        }
    }, 1000);
}

prevButton.addEventListener('click', () => {
    clearInterval(autoSlideInterval);
    currentIndex--;
    showSlide(currentIndex);
    autoSlideCountdown = 10; // Reiniciar la cuenta regresiva
    setTimeout(startAutoSlide, 10000);
});

nextButton.addEventListener('click', () => {
    clearInterval(autoSlideInterval);
    currentIndex++;
    showSlide(currentIndex);
    autoSlideCountdown = 10; // Reiniciar la cuenta regresiva
    setTimeout(startAutoSlide, 10000);
});

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        clearInterval(autoSlideInterval);
        currentIndex = index;
        showSlide(currentIndex);
        autoSlideCountdown = 10; // Reiniciar la cuenta regresiva
        setTimeout(startAutoSlide, 10000);
    });
});

startAutoSlide();