document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelector('.desliza');
    const images = slides.querySelectorAll('img');
    let currentIndex = 0;

    const changeSlide = () => {
        currentIndex = (currentIndex + 1) % images.length;
        const offset = -currentIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;
    };

    setInterval(changeSlide, 4000); // Cambia cada 3 segundos
});

document.addEventListener('DOMContentLoaded', () => {
    const heading = document.getElementById('titulo');
    setTimeout(() => {
        heading.classList.add('visible');
    }, 2000); // 2000 milisegundos = 2 segundos
});

document.addEventListener('DOMContentLoaded', () => {
    const heading = document.getElementById('subtitulo');
    setTimeout(() => {
        heading.classList.add('visible');
    }, 3000); // 2000 milisegundos = 2 segundos
});