// Cat Database
const products = {
    '1': {
        name: 'Kucing Persia Peaknose',
        price: 3500000,
        gender: 'Betina',
        rating: '⭐⭐⭐⭐⭐ 4.9',
        description: 'Kucing Persia Peaknose betina yang cantik dengan bulu putih bersih dan hidung pesek khas Persia. Kucing ini sangat jinak dan cocok untuk pemula. Sudah divaksin lengkap dan memiliki sertifikat kesehatan dari dokter hewan. Karakternya tenang dan suka dipeluk, sangat cocok untuk dijadikan teman di rumah.',
        specs: [
            'Ras: Persia Peaknose',
            'Jenis Kelamin: Betina',
            'Usia: 3 bulan',
            'Warna: Putih',
            'Berat: 1.2 kg',
            'Vaksin: Lengkap (Tricat)',
            'Kondisi: Sehat, aktif, sudah makan sendiri'
        ],
        images: ['7.png', '7.png', '7.png', '7.png']
    },
    '2': {
        name: 'Kucing Scottish Fold',
        price: 5500000,
        gender: 'Jantan',
        rating: '⭐⭐⭐⭐⭐ 5.0',
        description: 'Scottish Fold jantan dengan ciri khas telinga lipat yang menggemaskan. Bulu abu-abu yang halus dan lebat. Kucing ini sangat aktif dan suka bermain, memiliki kepribadian yang ramah dan mudah beradaptasi dengan lingkungan baru. Cocok untuk keluarga dengan anak-anak.',
        specs: [
            'Ras: Scottish Fold',
            'Jenis Kelamin: Jantan',
            'Usia: 4 bulan',
            'Warna: Abu-abu (Grey)',
            'Berat: 1.5 kg',
            'Vaksin: Lengkap + Rabies',
            'Kondisi: Sehat, playful, litter trained'
        ],
        images: ['2.png', '2.png', '2.png', '2.png']
    },
    '3': {
        name: 'Kucing Maine Coon',
        price: 8000000,
        gender: 'Jantan',
        rating: '⭐⭐⭐⭐⭐ 4.9',
        description: 'Maine Coon jantan dengan ukuran besar dan bulu panjang lebat. Dikenal sebagai "gentle giant", kucing ini sangat jinak meskipun berukuran besar. Memiliki pola brown tabby yang indah dan ekor yang sangat berbulu. Sangat cerdas dan mudah dilatih, cocok untuk yang menginginkan kucing berukuran besar dengan karakter lembut.',
        specs: [
            'Ras: Maine Coon',
            'Jenis Kelamin: Jantan',
            'Usia: 5 bulan',
            'Warna: Brown Tabby',
            'Berat: 2.5 kg (akan tumbuh besar)',
            'Vaksin: Lengkap + Rabies',
            'Kondisi: Sehat, sangat aktif, friendly'
        ],
        images: ['3.png', '3.png', '3.png', '3.png']
    },
    '4': {
        name: 'Kucing Ragdoll',
        price: 6500000,
        gender: 'Betina',
        rating: '⭐⭐⭐⭐⭐ 4.8',
        description: 'Ragdoll betina dengan mata biru yang memukau dan pola seal point yang elegan. Kucing ini dikenal sangat jinak dan rileks saat digendong, seperti boneka kain (ragdoll). Karakternya sangat tenang dan penyayang, cocok untuk apartemen atau rumah dengan suasana tenang.',
        specs: [
            'Ras: Ragdoll',
            'Jenis Kelamin: Betina',
            'Usia: 3 bulan',
            'Warna: Seal Point',
            'Berat: 1.3 kg',
            'Vaksin: Lengkap',
            'Kondisi: Sangat jinak, calm temperament'
        ],
        images: ['4.png', '4.png', '4.png', '4.png']
    },
    '5': {
        name: 'Kucing British Shorthair',
        price: 4500000,
        gender: 'Jantan',
        rating: '⭐⭐⭐⭐⭐ 4.9',
        description: 'British Shorthair jantan dengan warna blue grey yang klasik dan pipi chubby yang menggemaskan. Kucing ini memiliki karakter tenang dan mandiri, tidak terlalu demanding. Bulunya pendek dan mudah dirawat. Cocok untuk orang yang sibuk namun tetap ingin memiliki kucing yang manis.',
        specs: [
            'Ras: British Shorthair',
            'Jenis Kelamin: Jantan',
            'Usia: 4 bulan',
            'Warna: Blue Grey',
            'Berat: 1.8 kg',
            'Vaksin: Lengkap + Rabies',
            'Kondisi: Sehat, independent, low maintenance'
        ],
        images: ['5.png', '5.png', '5.png', '5.png']
    },
    '6': {
        name: 'Kucing Munchkin',
        price: 7000000,
        gender: 'Betina',
        rating: '⭐⭐⭐⭐⭐ 5.0',
        description: 'Munchkin betina dengan kaki pendek yang sangat menggemaskan dan pola calico yang unik. Kucing ini sangat aktif dan suka bermain meskipun kakinya pendek. Memiliki kepribadian yang ceria dan selalu ingin tahu. Sangat fotogenik dan akan menjadi idola di media sosial Anda!',
        specs: [
            'Ras: Munchkin',
            'Jenis Kelamin: Betina',
            'Usia: 3 bulan',
            'Warna: Calico',
            'Berat: 1.0 kg',
            'Vaksin: Lengkap',
            'Kondisi: Sangat aktif, playful, healthy'
        ],
        images: ['6.png', '6.png', '6.png', '6.png']
    }
};

// Cart Management
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    loadProductDetail();
    initializeAddToCart();
    initializeComments();
    initializeStarRating();
    initializeLogin();
});

// Get cat ID from URL
function getProductId() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('id') || '1';
}

// Load cat detail
function loadProductDetail() {
    const productId = getProductId();
    const product = products[productId];

    if (!product) {
        window.location.href = 'index.html';
        return;
    }

    // Update page content
    document.getElementById('productName').textContent = product.name;
    document.getElementById('productPrice').textContent = formatPrice(product.price);
    document.getElementById('productGender').textContent = product.gender;
    document.getElementById('productRating').textContent = product.rating + ' (150 review)';
    document.getElementById('productDescription').textContent = product.description;
    document.getElementById('breadcrumbProduct').textContent = product.name;

    // Update specifications
    const specsList = document.getElementById('productSpecs');
    specsList.innerHTML = '';
    product.specs.forEach(spec => {
        const li = document.createElement('li');
        li.textContent = spec;
        specsList.appendChild(li);
    });

    // Update carousel images
    const carouselImages = document.getElementById('carouselImages');
    carouselImages.innerHTML = '';
    product.images.forEach((image, index) => {
        const div = document.createElement('div');
        div.className = `carousel-item ${index === 0 ? 'active' : ''}`;
        div.innerHTML = `<img src="assets/${image}" class="d-block w-100" alt="${product.name}">`;
        carouselImages.appendChild(div);
    });

    // Initialize carousel with auto-play
    const carousel = new bootstrap.Carousel(document.getElementById('productCarousel'), {
        interval: 3000,
        wrap: true,
        keyboard: true,
        pause: 'hover'
    });

    // Store product info for add to cart
    const addToCartBtn = document.getElementById('addToCartDetail');
    addToCartBtn.setAttribute('data-id', productId);
    addToCartBtn.setAttribute('data-name', product.name);
    addToCartBtn.setAttribute('data-price', product.price);
}

// Format price to IDR
function formatPrice(price) {
    return 'Rp ' + price.toLocaleString('id-ID');
}

// Update cart count
function updateCartCount() {
    const cartCount = document.getElementById('cartCount');
    if (cartCount) {
        cartCount.textContent = cart.length;
    }
}

// Initialize Add to Cart
function initializeAddToCart() {
    const addToCartBtn = document.getElementById('addToCartDetail');
    
    addToCartBtn.addEventListener('click', function() {
        const productId = this.getAttribute('data-id');
        const productName = this.getAttribute('data-name');
        const productPrice = this.getAttribute('data-price');
        
        addToCart(productId, productName, productPrice);
    });
}

// Add to cart
function addToCart(id, name, price) {
    const product = {
        id: id,
        name: name,
        price: price,
        quantity: 1
    };

    const existingProduct = cart.find(item => item.id === id);
    
    if (existingProduct) {
        showToast('Kucing ini sudah ada di keranjang! 😺');
        return;
    } else {
        cart.push(product);
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    showToast('Kucing berhasil dipilih! Hubungi kami untuk melanjutkan pemesanan 💬');
}

// Show toast
function showToast(message = 'Kucing berhasil ditambahkan ke keranjang!') {
    const toastElement = document.getElementById('cartToast');
    const toastBody = toastElement.querySelector('.toast-body');
    toastBody.textContent = message;
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
}


// Initialize comments
function initializeComments() {
    const commentForm = document.getElementById('commentForm');
    
    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const userName = document.getElementById('userName').value;
        const userComment = document.getElementById('userComment').value;
        const ratingValue = document.getElementById('ratingValue').value;

        if (ratingValue === '0') {
            alert('Silakan pilih rating terlebih dahulu! ⭐');
            return;
        }

        addComment(userName, userComment, ratingValue);
        
        // Reset form
        commentForm.reset();
        document.querySelectorAll('.star').forEach(s => {
            s.textContent = '☆';
            s.classList.remove('active');
        });
        document.getElementById('ratingValue').value = '0';
        
        // Show success message
        showToast('Review berhasil dikirim! Terima kasih atas masukkannya 💖');
    });
}

// Cart button
const cartBtn = document.getElementById('cartBtn');
if (cartBtn) {
    cartBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (cart.length === 0) {
            alert('Keranjang Anda masih kosong 😿\n\nYuk pilih kucing kesayangan Anda!');
        } else {
            let cartList = 'Kucing di Keranjang Anda:\n\n';
            let total = 0;
            
            cart.forEach((item, index) => {
                const price = parseInt(item.price);
                cartList += `${index + 1}. ${item.name}\n   Rp ${price.toLocaleString('id-ID')}\n\n`;
                total += price;
            });
            
            cartList += `Total: Rp ${total.toLocaleString('id-ID')}\n\n`;
            cartList += 'Untuk melanjutkan pemesanan, silakan hubungi kami via WhatsApp! 💬';
            
            alert(cartList);
        }
    });
}