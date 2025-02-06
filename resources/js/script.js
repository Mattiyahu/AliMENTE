document.addEventListener('DOMContentLoaded', function() {
    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselImages = document.querySelectorAll('.carousel-slide img');
    const carouselButtons = document.querySelectorAll('.carousel-buttons .dot');
    let currentIndex = 0;

    function updateSlide() {
        const slideWidth = carouselSlide.offsetWidth; // Largura do container
        carouselSlide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        carouselButtons.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    // Atualiza o tamanho do slide quando a janela é redimensionada
    window.addEventListener('resize', updateSlide);

    // Muda para o próximo slide
    function moveToNextSlide() {
        currentIndex = (currentIndex + 1) % carouselImages.length;
        updateSlide();
    }

    // Ao clicar nas bolinhas do carrossel
    carouselButtons.forEach(button => {
        button.addEventListener('click', function() {
            const dataIndex = parseInt(this.dataset.index);
            currentIndex = dataIndex;
            updateSlide();
        });
    });

    // Mudar de slide a cada 4 segundos
    setInterval(moveToNextSlide, 4000);

    // Garante que o slide seja atualizado quando a página carregar
    updateSlide();

    // Menu hamburguer
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.nav-links');

    hamburgerMenu.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        hamburgerMenu.classList.toggle('active');
    });
});
