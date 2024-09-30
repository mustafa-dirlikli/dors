// script.js
// İlan Verilerini Simüle Etmek İçin Örnek Veriler
var ilanlar = [];
for (var i = 0; i < 100; i++) { // Daha makul bir sayı kullanın
    ilanlar.push({
        title: "Demir Çelik A.Ş" + (i + 1),
        description: "İlan açıklaması burada yer alır.",
        image: "https://i0.shbdn.com/photos/44/56/45/x5_1087445645ugn.jpg"
    });
}

// Lazy Load ve Sanallaştırma İçin Intersection Observer
const ilanlarContainer = document.getElementById('ilanlar');
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const ilanElement = entry.target;
            const imgElement = ilanElement.querySelector('img');
            imgElement.src = imgElement.dataset.src;
            observer.unobserve(ilanElement);
        }
    });
}, observerOptions);

function loadIlanlar(start, end) {
    for (let i = start; i < end; i++) {
        if (i >= ilanlar.length) return;

        const ilan = ilanlar[i];
        const ilanCard = document.createElement('div');
        ilanCard.className = 'col-md-4 mb-4';
        ilanCard.innerHTML = `
            <div class="card mb-4">
    <img data-src="${ilan.image}" class="card-img-top" alt="İlan Resmi">
    <div class="card-body">
    <h5 class="card-title">${ilan.title}</h5>
    
    <!-- İlan Bilgileri -->
    <p><strong>Hedef:</strong> Hatay -> Adana</p>
    <p><strong>Yük Türü:</strong> Metal Sac</p>
    <p><strong>Dorse Türü:</strong> Frigo Dorse</p>
    <p><strong>Min Sürücü Puanı:</strong> 85</p>
    <p><strong>Teslimat Süresi:</strong> 36 Saat</p>
    
    <!-- Fiyat ve Detaylar -->
    <div class=" mt-2 d-flex justify-content-between align-items-center">
        <a href="#" class="btn btn-outline-info">Detayları Gör</a>
        <h6 class="mb-0"> <mark> 50.000 TL</mark></h6>
    </div>
    </div>
        </div>

        `;
        ilanlarContainer.appendChild(ilanCard);
        observer.observe(ilanCard);
    }
}

let loading = false;
const batchSize = 20;
let currentIndex = 0;

function onScroll() {
    if (loading) return;
    const container = document.querySelector('.list-container');
    const scrollBottom = container.scrollHeight - container.scrollTop <= container.clientHeight;

    if (scrollBottom) {
        loading = true;
        currentIndex += batchSize;
        loadIlanlar(currentIndex - batchSize, currentIndex);
        loading = false;
    }
}

document.querySelector('.list-container').addEventListener('scroll', onScroll);

// İlk Yükleme
loadIlanlar(0, batchSize);


