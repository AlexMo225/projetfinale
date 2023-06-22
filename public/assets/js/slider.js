const images = document.querySelectorAll('.imgbox img');
let currentImage = 0;

function showImage(index) {
    images.forEach((image, i) => {
        if (i === index) {
            image.style.display = 'block';
        } else {
            image.style.display = 'none';
        }
    });
}

function nextImage() {
    currentImage++;
    if (currentImage >= images.length) {
        currentImage = 0;
    }
    showImage(currentImage);
}

// Afficher la première image
showImage(currentImage);

// Défilement automatique des images toutes les 3 secondes
setInterval(nextImage, 2000);